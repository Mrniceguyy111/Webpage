<?php

namespace App\Http\Livewire\Website;

use App\Models\AnimalsCategory;
use App\Models\WorkUs;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Work extends Component
{
    public $name,
        $email,
        $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];

    public function render()
    {
        return view('livewire.website.work-us.form')
            ->extends('template', ["animalCategory" => AnimalsCategory::all()]);;
    }

    public function store()
    {
        $this->validate();

        $query = WorkUs::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);


        Mail::send('emails.work-us', ['name' => $this->name, 'correo' => $this->email], function ($message) {
            $message->from('info@hatchi.com.co', 'Hatchi');
            $message->to($this->email, $this->name);
            $message->subject('¡Recibimos tu propuesta de trabajo en Hatchi');
        });

        $this->resetExcept("search");
        return redirect()->back()->with(
            "message",
            "Registro exitoso, en poco tendras detalles... #" . $query->id
        );
    }
}
