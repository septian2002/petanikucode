<?php

namespace App\Http\Controllers;

use App\Models\dataAnggota;
use Illuminate\Http\Request;

class DataAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data anggota');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dataAnggota $dataAnggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dataAnggota $dataAnggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dataAnggota $dataAnggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataAnggota $dataAnggota)
    {
        //
    }
}
