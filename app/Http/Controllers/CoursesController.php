<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use Validator;
use Illuminate\Support\Facades\DB;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cv($userName)
    {
         $cv = DB::table('courses')
        ->join('users', 'courses.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('courses.*')
        ->get();
        return response()->json($cv);
    }
    public function index($id)
    {
        $course = Courses::where('user_id',$id)->get();
        return response()->json($course);
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
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $course = new Courses();
        $course ->name = $request ->name;
        $course ->date_from = $request ->date_from;
        $course ->date_to = $request ->date_to;
        $course ->user_id = $request ->user_id;
        $course->save();
        return response()->json($course);
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
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $course = Courses::find($request->id);
        $course ->name = $request ->name;
        $course ->date_from = $request ->date_from;
        $course ->date_to = $request ->date_to;
        $course ->user_id = $request ->user_id;
        $course->save();
        return response()->json($course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $course = Courses::find($request->id);
        $course->delete();
        return response()->json($course);
    }
}