<?php

namespace App\Http\Controllers;

use App\Models\ward;
use App\Http\Requests\StorewardRequest;
use App\Http\Requests\UpdatewardRequest;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorewardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ward $ward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ward $ward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewardRequest $request, ward $ward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ward $ward)
    {
        //
    }
}
