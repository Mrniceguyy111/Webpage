<?php

namespace App\Http\Livewire\Backend;

use App\Models\AnimalBreed;
use Illuminate\Support\Str;
use App\Models\Animals;
use App\Models\Pets as ModelsPets;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pets extends Component
{
    use WithFileUploads;

    public $editing = false;
    public $modal = false;
    public $profile = false;

    public $pet_id,
        $owner_id,
        $animal_id,
        $race_id,
        $photo,
        $imagename,
        $name,
        $slug_pet,
        $age,
        $weight,
        $is_vaccinated,
        $peat_eats,
        $temper;

    public function render()
    {
        $user = User::find(Auth::id());

        $pets = ModelsPets::where('owner_id', $user->id)->get();

        $races = AnimalBreed::where('animal_id', $this->animal_id)->get();

        return view('livewire.backend.pets.view', [
            'pets' => $pets,
            'animals' => Animals::all(),
            'races' => $races,
        ]);
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function create()
    {
        $this->resetExcept("search");
        $this->openModal();
    }

    public function viewPet($id)
    {
        $this->resetExcept("search");
        $this->profile = true;

        $pet = ModelsPets::findOrFail($id);

        $race = AnimalBreed::findOrFail($pet->animal_id);
        $animal = Animals::findOrFail($pet->animal_id);

        $this->owner_id = $pet->owner_id;
        $this->animal_id = $animal->name;
        $this->race_id = $race->name;
        $this->name = $pet->name;
        $this->slug_pet = $pet->slug;
        $this->age = $pet->age;
        if ($pet->is_vaccinated == 1) {
            $this->is_vaccinated = "Si";
        } else {
            $this->is_vaccinated = "No";
        }
        $this->weight = $pet->weight;
        $this->photo = $pet->photo;
    }

    public function closePet()
    {
        $this->resetExcept("search");
        $this->profile = false;
    }

    public function store()
    {
        // $this->validate();


        if ($this->imagename) {
            if ($this->photo) {
                Storage::disk("imagePets")->delete($this->image);
            }
            $this->photo = $this->imagename->store(null, "imagePets");
        }

        $user = User::find(Auth::id());
        ModelsPets::updateOrCreate(
            ["id" => $this->pet_id],
            [
                "owner_id" => $user->id,
                "animal_id" => $this->animal_id,
                "race_id" => $this->race_id,
                "name" => $this->name,
                "slug_pet" => Str::slug($this->name),
                "age" => $this->age,
                "weight" => $this->weight,
                "photo" => $this->photo,
                "is_vaccinated" => $this->is_vaccinated,
                "peat_eats" => $this->peat_eats,
                "temper" => $this->temper,
            ]
        );

        $this->closeModal();
        $this->editing = false;
        return session()->flash(
            "message",
            $this->pet_id ? "¡Actualización exitosa!" : "¡Creacion Exitosa!"
        );
    }



    public function edit($id)
    {
        $this->resetExcept("search");

        $this->editing = true;
        $this->pet_id = $id;
        $pet = ModelsPets::findOrFail($id);

        $this->owner_id = $pet->owner_id;
        $this->animal_id = $pet->animal_id;
        $this->race_id = $pet->race_id;
        $this->name = $pet->name;
        $this->slug_pet = $pet->slug;
        $this->age = $pet->age;
        $this->is_vaccinated = $pet->is_vaccinated;
        $this->weight = $pet->weight;
        $this->photo = $pet->photo;
    }
}
