<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PetsCollection;
use App\Http\Resources\V1\PetsResource;
use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PetsCollection(Pets::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pets $pets)
    {
        return new PetsResource($pets);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pets $pets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pets $pets)
    {
        //
    }
}
