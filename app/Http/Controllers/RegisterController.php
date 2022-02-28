<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register',[
            'title' => 'register'
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
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required|max:15|unique:users',
            'password' => 'required|max:20',
            'conpassword' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'birth' => 'required',
        ]);

        // User::create($validatedData);
        $user = new User();
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->age = $request->age;
        $user->birth = $request->birth;
        $user->course_1 = null;
        $user->course_2 = null;
        $user->course_3 = null;
        $user->course_4 = null;
        // $user->save();

        if($request->password == $request->conpassword){
            $user->save();
            return view('welcome');
            }
            else {
            return back()->with('loginError', 'Gagal Login, Username atau password salah');
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
