<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use App\Http\Requests\StorePosterRequest;
use App\Http\Requests\UpdatePosterRequest;

class PosterController extends Controller
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
    public function store(StorePosterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Poster $poster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poster $poster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePosterRequest $request, Poster $poster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poster $poster)
    {
        //
    }
}
