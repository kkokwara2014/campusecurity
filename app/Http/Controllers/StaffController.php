<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;
use Auth;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $staffs = User::where('role_id', '2')->orderBy('created_at','desc')->get();
        $departments = Department::orderBy('name', 'asc')->get();


        return view('admin.staff.index', compact('user', 'staffs', 'departments'));
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
        $this->validate($request, [
            'lastname' => 'required|string',
            'firstname' => 'required|string',
           
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'identity' => 'required',
            'department_id' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = new User;
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->phone = $request->phone;
        $user->identity = $request->identity;
        $user->email = $request->email;
        $user->department_id = $request->department_id;
        
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        

        $user->save();

        return redirect(route('staff.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staffs=User::find($id);
        // $staffcourses=Course::where('user_id',$id)->get();
        $departments = Department::orderBy('name', 'asc')->get();
        
        return view('admin.staff.show',array('user'=>Auth::user()),compact('staffs','departments'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
