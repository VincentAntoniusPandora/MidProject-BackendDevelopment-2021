<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('login',[
            'username' => 'login',
            'password' => 'login'
        ]);
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

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $id_user = User::where(['username'=>$request->username])->value('id_user');
        session(['id_user' => $id_user]);
        $fullname = User::where(['username'=>$request->username])->value('fullname');
        session(['fullname' => $fullname]);
        $course_1 = User::where(['username'=>$request->username])->value('course_1');
        session(['course_1' => $course_1]);
        $course_2 = User::where(['username'=>$request->username])->value('course_2');
        session(['course_2' => $course_2]);
        $course_3 = User::where(['username'=>$request->username])->value('course_3');
        session(['course_3' => $course_3]);
        $course_4 = User::where(['username'=>$request->username])->value('course_4');
        session(['course_4' => $course_4]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginerror','Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

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
