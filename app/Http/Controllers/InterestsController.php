<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interests;
use Validator;
use Illuminate\Support\Facades\DB;
class InterestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('interests')
        ->join('users', 'interests.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('interests.*')
        ->get();
        return response()->json($cv);
    }

    public function index($id)
    {
        $interests = Interests::where('user_id',$id)->get();
        return response()->json($interests);
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
            'interests' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $interests = new Interests();
        $interests ->interests = $request ->interests;
        $interests ->user_id = $request ->user_id;
        $interests->save();
        return response()->json($interests);
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
            'interests' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $interests = Interests::find($request->id);
        $interests ->interests = $request ->interests;
        $interests ->user_id = $request ->user_id;
        $interests->save();
        return response()->json($interests);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $interests = Interests::find($request->id);
        $interests->delete();
        return response()->json($interests);
    }
}
