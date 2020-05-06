<?php

namespace App\Http\Controllers;

use App\Regions;
use Illuminate\Http\Request;
use App\Countries;
use App\User;
use Illuminate\Support\Facades\Auth;

class CountryManagementController extends Controller
{

    public function __Construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Countries::all();

        return view('system-mgmt/country/index',compact('countries'));
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
        $this->validateInput($request);
        Countries::create([
            'name' => $request['name'],


        ]);

        return redirect()->intended('system-management/country')->with('success','Country Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Countries $countries)
    {
        $request->update([
            'name'=>'required',
        ]);

        $countries->update(Regions::all());
        return  redirect()->intended('system-mgmt/country/index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Countries $countries)
    {
        $countries->delete();
        return redirect()->intended('system-mgmt/country/index')->with('success','Deleted Successfully');

    }
    private function validateInput($request) {
        $this->validate($request, [
            'name' => 'required|max:60|unique:countries',

        ]);
    }
}
