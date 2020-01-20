<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use Validator;
use Illuminate\Support\Facades\DB;
class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('education')
        ->join('users', 'education.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('education.*')
        ->get();
        return response()->json($cv);
    }
    public function index($id)
    {
        $education = Education::where('user_id',$id)->get();
        return response()->json($education);
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
            'school_name' => 'required',
            'description' => 'required', 
            'date_from' => 'required',
            'date_to' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $education = new Education();
        $education ->school_name = $request ->school_name;
        $education ->description = $request ->description;
        $education ->date_from = $request ->date_from;
        $education ->date_to = $request ->date_to;
        $education ->user_id = $request ->user_id;
        $education->save();
        return response()->json($education);
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
            'school_name' => 'required',
            'description' => 'required', 
            'date_from' => 'required',
            'date_to' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $education = Education::find($request ->id);
        $education ->school_name = $request ->school_name;
        $education ->description = $request ->description;
        $education ->date_from = $request ->date_from;
        $education ->date_to = $request ->date_to;
        $education ->user_id = $request ->user_id;
        $education->save();
        return response()->json($education);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $education = Education::find($request ->id);
        $education->delete();
        return response()->json($education);
    }
}
