<?php

namespace App\Http\Controllers;

use App\Models\UserCrud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display the dashboard landing page for the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('users.dashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|integer|max:120',
            'first_name' => 'required|string|max:122',
            'last_name' => 'required|string|max:122',
            'email_id' => 'required|string|unique:user_cruds',
            'mobile_no' => 'required|string|max:25',
            'role_type' => 'required',
            'username' => 'required|string|max:122',
            'password' => 'required|string|min:8|max:122|confirmed',
            'permission' => 'required',
        ]);
        $input = $request->all();
        $input['permission'] = $request->input('permission');
        UserCrud::create($input);
        return redirect()->route('user.index')->with('success', 'User added successfully.');
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
