<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conferences;
use Validator;
use Illuminate\Support\Facades\DB;
class ConferencesController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('conferences')
        ->join('users', 'conferences.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('conferences.*')
        ->get();
        return response()->json($cv);
    }
    public function index($id)
    {
        $conference = Conferences::where('user_id',$id)->get();
        return response()->json($conference);
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
            'date' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $conference = new Conferences();
        $conference ->name = $request ->name;
        $conference ->date = $request ->date;
        $conference ->user_id = $request ->user_id;
        $conference->save();
        return response()->json($conference);
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
            'date' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $conference = Conferences::find($request->id);
        $conference ->name = $request ->name;
        $conference ->date = $request ->date;
        $conference ->user_id = $request ->user_id;
        $conference->save();
        return response()->json($conference);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $conference = Conferences::find($request->id);
        $conference->delete();
        return response()->json($conference);
    }
}
