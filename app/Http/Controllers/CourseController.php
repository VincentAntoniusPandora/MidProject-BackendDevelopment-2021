<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user= User::select('id_user', 'username', 'fullname', 'address', 'age', 'birth', 'phone', 'course_1', 'course_2', 'course_3', 'course_4')->where('id_user','=',$id)->get()->first();
        return view('course',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function enroll_1($id)
    {
        User::where('id_user', $id)->update(['course_1'=> 1]);
        $course_1 = User::where(['id_user'=>$id])->value('course_1');
        session(['course_1' => $course_1]);
        return redirect('/home');
    }

    public function enroll_2($id)
    {
        User::where('id_user', $id)->update(['course_2'=> 1]);
        $course_2 = User::where(['id_user'=>$id])->value('course_2');
        session(['course_2' => $course_2]);
        return redirect('/home');
    }

    public function enroll_3($id)
    {
        User::where('id_user', $id)->update(['course_3'=> 1]);
        $course_3 = User::where(['id_user'=>$id])->value('course_3');
        session(['course_3' => $course_3]);
        return redirect('/home');
    }

    public function enroll_4($id)
    {
        User::where('id_user', $id)->update(['course_4'=> 1]);
        $course_4 = User::where(['id_user'=>$id])->value('course_4');
        session(['course_4' => $course_4]);
        return redirect('/home');
    }

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
