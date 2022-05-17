<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zipcodes = Zipcode::all();
        return response(array("zip_codes" => [$zipcodes]))
            ->header('Content-Type', 'application/json');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function show(Zipcode $zipcode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function edit(Zipcode $zipcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zipcode $zipcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zipcode $zipcode)
    {
        //
    }
}