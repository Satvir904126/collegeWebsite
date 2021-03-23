<?php

namespace App\Http\Controllers;

use App\Models\Rolls;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laracasts\Flash\Flash;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.passwords.changepassword');
    }
    public function indexStudent()
    {
        $students = Rolls::all();
        return view('students.password.changepassword', compact('students'));
    }

    public function changepassword(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);
        $existpassword =  Auth::user()->password;
        // dd(Hash::make($request->oldpassword), $existpassword);

        if (Hash::check($request->oldpassword, $existpassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();

            // after cahangeing password user willlog out
            Auth::logout();
            Flash::success("Password is changed Successfully login again");

            return Redirect()->route('login');
        } else {
            Flash::error("Old password is Invalid");

            return Redirect()->back();
        }
    }
    public function changepasswordStudent(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);
        $existpassword =  Auth::user()->password;
        // dd(Hash::make($request->oldpassword), $existpassword);

        if (Hash::check($request->oldpassword, $existpassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();

            // after cahangeing password user willlog out
            Auth::logout();
            Flash::success("Password is changed Successfully login again");

            return Redirect()->route('login');
        } else {
            Flash::error("Old password is Invalid");

            return Redirect()->back();
        }
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