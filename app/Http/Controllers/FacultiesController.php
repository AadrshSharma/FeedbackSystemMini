<?php

namespace App\Http\Controllers;

use App\Models\Faculties;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fcty($id)
    {
        //
        return response()->json(['data' => Faculties::where('s_id', $id)->get()], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function show(Faculties $faculties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculties $faculties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculties $faculties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculties $faculties)
    {
        //
    }
}
