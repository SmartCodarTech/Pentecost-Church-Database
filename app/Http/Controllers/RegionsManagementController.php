<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Regions;

class RegionsManagementController extends Controller
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
        $regions =Regions::all();
        return view('system-mgmt/regions/index',compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        Regions::create([
            'name' => $request['name'],


        ]);

        return redirect('system-management/regions')->with('success','Regions Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regions $regions)
    {
        $request->validate([
           'name'=>'required',
        ]);

        $regions->update(Regions::all());
        return redirect()->intended('system-mgmt/regions/index')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regions $regions)
    {
        $regions->delete();

        return redirect()->intended('system-mgmt/regions/index')->with('Deleted Successfully');
    }

    private function validateInput($request) {
        $this->validate($request, [
            'name' => 'required|max:60|unique:regions'

        ]);
    }
}
