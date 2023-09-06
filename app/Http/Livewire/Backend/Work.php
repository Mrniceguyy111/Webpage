<?php

namespace App\Http\Livewire\Backend;

use App\Models\WorkUs;
use Livewire\Component;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Work extends Component
{
    use AuthorizesRequests;

    public $modal = false;

    public $postulant_id,
        $name,
        $email,
        $message;


    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }


    public function render()
    {
        $this->authorize("viewAny", App\Models\Product::class);
        return view('livewire.backend.work-us.view', [
            'objects' => WorkUs::all(),
        ]);
    }

    public function edit($id)
    {

        $this->resetExcept("search");
        $this->postulant_id = $id;
        $post = WorkUs::findOrFail($id);

        $this->name = $post->name;
        $this->email = $post->email;
        $this->message = $post->message;

        $this->openModal();
    }

    public function delete($id)
    {
        WorkUs::find($id)->delete();
        session()->flash("message", "Registro elimnado correctamente");
    }
}
