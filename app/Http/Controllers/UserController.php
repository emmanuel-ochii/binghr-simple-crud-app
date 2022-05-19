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
        $users = UserCrud::all();
        return view('users.user', compact('users'));
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
            'permission_admin' => 'required',
            'permission_employee' => 'required',
            'permission_hr' => 'required',

        ]);

        $user = UserCrud::create($request->all());

        if (!is_null($user)) {
            return response()->json(["status" => "success", "message" => "Success! user created.", "data" => $user]);
        } else {
            return response()->json(["status" => "failed", "message" => "Alert! user not created"]);
        }
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
    public function edit(UserCrud $user)
    {
        return view('users.user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'employee_id' => 'required|integer|max:120',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'status'=>400,
        //         'errors'=>$validator->messages()
        //     ]);
        // } else {
        //     $user = user::find($id);
        //     if ($user) {
        //         $user->employee_id = $request->input('employee_id');
        //         $user->update();
        //         return response()->json([
        //             'status'=>200,
        //             'message'=>'User Updated Successfully. Please Refresh Page'
        //         ]);
        //     } else {
        //         return response()->json([
        //             'status'=>404,
        //             'message'=>'No User Found.'
        //         ]);
        //     }
        // }

        $user_id        =       $request->id;
        $user           =       UserCrud::where("id", $user_id)->update($request->all());

        if ($user == 1) {
            return response()->json(["status" => "success", "message" => "Success! post updated"]);
        } else {
            return response()->json(["status" => "failed", "message" => "Alert! post not updated"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $user = UserCrud::where("id", $user_id)->delete();
        if ($user == 1) {
            return response()->json(["status" => "success", "message" => "Success! user deleted", "data" => $user]);
        } else {
            return response()->json(["status" => "failed", "message" => "Alert! user not deleted", "data" => $user]);
        }
    }

    public function sortingRole(Request $request)
    {
        $role=UserCrud::all;
    }
}
