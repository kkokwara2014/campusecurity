<?php

namespace App\Http\Controllers;

use App\Location;
use App\Statement;
use App\User;
use Illuminate\Http\Request;
use Auth;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $locations=Location::orderBy('name','asc')->get();
        $users=User::where('role_id','2')->orderBy('lastname','asc')->get();
        $statements=Statement::orderBy('created_at','desc')->get();

        return view('admin.statement.index',compact('statements','users','locations','user'));
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
            'complainant' => 'required|string',
            'gender' => 'required|string',
            'location_id' => 'required',
            'regnumber' => 'required',
            'phone' => 'required',
            'religion' => 'required',
            'dateofevent' => 'required',
            'timeofevent' => 'required',
            'casetype' => 'required',
            'entry' => 'required',
        ]);

        Statement::create($request->all());

        return redirect(route('statement.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $locations=Location::orderBy('name','asc')->get();
        $users=User::where('role_id','2')->orderBy('lastname','asc')->get();
        $statement=Statement::find($id);

        return view('admin.statement.show',compact('statement','users','locations','user'));
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
