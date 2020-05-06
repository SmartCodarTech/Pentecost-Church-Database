<?php

namespace App\Http\Controllers;

use App\Cells;
use App\Members;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Countries;
use App\Regions;
use App\Categories;
use App\Roles;
use App\Division;
use App\User;
use Illuminate\Support\Facades\Auth;

class MembersManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Members::all();

        return view('system-mgmt/members/index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries =Countries::all();
        $regions= Regions::all();
        $categories = Categories::all();
        $roles = Roles::all();
        $division = Division::all();
        $cells = Cells::all();

        return view('system-mgmt/members/create',compact('countries','regions','cells','roles','categories','division'));
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
        // Upload image
        $path = $request->file('photo')->store('avatars','public');
        $keys = ['prefix','firstname','lastname','gender','email','phone','middlename',
            'nationality','occupation','church_session','city',
            'region','hometown','address','relative','relative_contact','church_group',
            'age','birthdate', 'marital_status','language','role_in_church','home_cell'];
        $input = $this->createQueryInput($keys, $request);
        $input['photo'] = $path;
        Members::create($input);

        return redirect('system-management/members')->with('success','Church member details created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Members::findorfail($id);

        return view('system-mgmt/members/show',compact('members'));

    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $members = Members::findorfail($id);
        $countries =Countries::all();
        $regions= Regions::all();
        $categories = Categories::all();
        $roles = Roles::all();
        $division = Division::all();
        $cells = Cells::all();

        return view('system-mgmt/members/edit',compact('countries','members','regions','cells','roles','categories','division'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $this->validateInput($request);
        // Upload image
        $path = $request->file('photo')->store('avatars','public');
        $keys = ['prefix','firstname','lastname','gender','email','phone','middlename',
            'nationality','occupation','church_session','city',
            'region','hometown','address','relative','relative_contact','church_group',
            'age','birthdate', 'marital_status','language','role_in_church','home_cell'];
        $input = $this->createQueryInput($keys, $request);
        $input['photo'] = $path;
        (new \App\Members)->update($input);

        return redirect('system-management/members')->with('success','Church member details Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Members $members
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy($id)
    {

        $members = Members::findorfail($id)->delete();

        return redirect('system-management/members')->with('success', 'Users Information is successfully deleted');
    }

    public function load($name) {
        $path = storage_path().'/avatars/'.$name;
        if (file_exists($path)) {
            return Response::download($path);
        }
    }

    private function validateInput($request) {
        $this->validate($request, [

            'prefix' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'age' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'relative' => 'required',
            'relative_contact' => 'required',
            'language' => 'required',
            'phone' => 'required|max:60|unique:members',
            'email' => 'required|max:60|unique:members',
            'address' => 'required',
            'role_in_church'=>'required',
            'church_group' => 'required',
            'church_session' => 'required',
            'nationality'=>'required',
            'hometown' => 'required',
            'region' => 'required',
            'city'=>'required',
            'marital_status'=> 'required',
             'home_cell' => 'required',

        ]);
    }

    private function createQueryInput($keys, $request): array
    {
        $queryInput = [];
        for($i = 0, $iMax = sizeof($keys); $iMax < $i; $i++) {
            $key = $keys[$i];
            $queryInput[$key] = $request[$key];
        }

        return $queryInput;
    }
}
