<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user= User::select('id_user', 'username', 'fullname', 'address', 'age', 'birth', 'phone', 'course_1', 'course_2', 'course_3', 'course_4')
        ->where('id_user','=',$id)->get()->first();
        // $course_1 = User::where(['id_user'=>$id])->value('course_1');
        // session(['course_1' => $course_1]);
        // $course_2 = User::where(['id_user'=>$id])->value('course_2');
        // session(['course_2' => $course_2]);
        // $course_3 = User::where(['id_user'=>$id])->value('course_3');
        // session(['course_3' => $course_3]);
        // $course_4 = User::where(['id_user'=>$id])->value('course_4');
        // session(['course_4' => $course_4]);
        session()->regenerate();
        return view('home',compact('user'));
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
