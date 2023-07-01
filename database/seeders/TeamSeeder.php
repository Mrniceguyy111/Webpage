<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Team, User};

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);

        $staff = $user->ownedTeams()->create([
            "name" => "Admininistracion",
            "personal_team" => false,
        ]);

        // $staff->users()->attach($user, ["role" => null]);


        $usuarios = $user->ownedTeams()->create([
            "name" => "Usuarios",
            "personal_team" => false,
        ]);

        $repartidor = $user->ownedTeams()->create([
            "name" => "Repartidor",
            "personal_team" => false,
        ]);

        $contador = $user->ownedTeams()->create([
            "name" => "Contador",
            "personal_team" => false,
        ]);

        $webmaster = $user->ownedTeams()->create([
            "name" => "Webmaster",
            "personal_team" => false,
        ]);

        $user->switchTeam($usuarios);
    }
}
