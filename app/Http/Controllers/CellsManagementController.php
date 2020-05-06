<?php

namespace App\Http\Controllers;
use App\Cells;

use Illuminate\Http\Request;


class CellsManagementController extends Controller
{
    public function __construct()
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
        $cells =Cells::all();

        return view('system-mgmt/cells/index',compact('cells'));
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
        Cells::create([
            'cell_name' => $request['cell_name'],
            'cell_center' => $request['cell_center'],
            'cell_leader' => $request['cell_leader'],
            'cell_location' => $request['cell_location'],


        ]);

        return redirect('system-management/cells')->with('success','Home Cell Created Successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cells $cells)
    {
        $request->update(
            [
                'cell_name'=>'required',
                'cell_center'=>'required',
                'cell_leader'=>'required',
                'cell_location'=>'required',
            ]
        );

        return redirect()->intended('system-mgmt/cells')->with('success','Cell Center Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cells = Cell::findorfail($id)->delete();

        return redirect('system-management/cells')->with('success', 'Cell deleted Successfully');

    }

        private function validateInput(Request $request) {

        $this->validate($request, [
            'cell_name' => 'required|max:60|unique:cells',
            'cell_center' => 'required',
            'cell_leader' => 'required',
            'cell_location' => 'required',

        ]);
    }


}
