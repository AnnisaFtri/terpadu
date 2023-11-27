<?php

namespace App\Http\Controllers;

use App\Models\anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('dataanak.index');
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        return view('dataanak.create');
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
    public function show(anak $anak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(anak $anak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, anak $anak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(anak $anak)
    {
        //
    }
}
