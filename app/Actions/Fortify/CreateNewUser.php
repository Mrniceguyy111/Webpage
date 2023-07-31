<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {


        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'phone' => ['required', 'integer'],
            'document' => ['required', 'integer'],
            'document_type' => ['required'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'phone' => $input['phone'],
                'document' => $input['document'],
                'birthday_date' => $input['birthday'],
                'document_type' => $input['document_type']
            ]), function (User $user) {
                $this->assignTeamAuto($user);
            });
        });
    }

    // /**
    //  * Create a personal team for the user.
    //  */
    // protected function createTeam(User $user): void
    // {
    //     $user->ownedTeams()->save(Team::forceCreate([
    //         'user_id' => $user->id,
    //         'name' => explode(' ', $user->name, 2)[0] . "'s Team",
    //         'personal_team' => true,
    //     ]));
    // }

    protected function assignTeamAuto(User $user)
    {
        // Si cambia el seeder de usuarios aca tambien de tendra que cambiarlo

        $team = Jetstream::teamModel()::where('name', 'Usuarios')->first();

        if ($team) {
            $user->currentTeam()->associate($team);
            $user->save();
        }
    }
}
