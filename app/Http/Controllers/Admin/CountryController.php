<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Response;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.countries.index', ['countries' => Country::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        Country::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {

        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, Country $country)
    {
        $country->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
