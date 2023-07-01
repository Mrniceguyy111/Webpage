<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\User;

class Userlist extends Component
{

    public $user_id,
        $name,
        $email,
        $password,
        $hatchi_coins,
        $is_verified,
        $last_login_ip,
        $last_purchase,
        $total_purchases,
        $email_verified_at,
        $suscription_level,
        $permision_level;

    public $modal = false;
    public $editing = false;

    public $search,
        $sort = "desc",
        $sort_id = "id";

    protected $rules = [
        'name' => 'required'
    ];

    public function render()
    {
        return view('livewire.backend.user.view', [
            'users' => User::all()
        ]);
    }

    public function store()
    {
        $this->validate();

        User::updateOrCreate(
            ["id" => $this->user_id],
            [
                "name" => $this->name,
                "email" => $this->email,
                "password" => $this->password,
                "hatchi_coins" => $this->hatchi_coins,
                "is_verified" => $this->is_verified,
                'last_login_ip' => $this->last_login_ip,
                'last_purchase' => $this->last_purchase,
                'total_purchases' => $this->total_purchases,
                'email_verified_at' => $this->email_verified_at,
                'suscription_level' => $this->suscription_level,
            ]

        );
        $this->editing = false;
        session()->flash(
            "message",
            $this->event_id ? "¡Actualización exitosa!" : "¡Alta Exitosa!"
        );
        $this->closeModal();
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function edit($id)
    {
        $this->editing = true;
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->is_verified = $user->is_verified;
        $this->hatchi_coins = $user->hatchi_coins;
        $this->last_login_ip = $user->last_login_ip;
        $this->last_purchase = $user->last_purchase;
        $this->total_purchases = $user->total_purchases;
        $this->email_verified_at = $user->email_verified_at;
        $this->suscription_level = $user->subscription->name;
        $this->permision_level = $user->permision_level;
        $this->openModal();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash("message", "Registro elimnado correctamente");
    }
}
