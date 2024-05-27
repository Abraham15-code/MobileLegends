<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Hi of function INDEX of controller PlacesController';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Hi of function STORE of controller PlacesController';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Hi of function SHOW of controller PlacesController';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Hi of function UPDATE of controller PlacesController';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Hi of function DESTROY of controller PlacesController: '. $id;
    }
}
