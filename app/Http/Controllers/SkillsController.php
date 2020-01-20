<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;
use Validator;
use Illuminate\Support\Facades\DB;
class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function cv($userName)
    {
        $cv = DB::table('skills')
        ->join('users', 'skills.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('skills.*')
        ->get();
        return response()->json($cv);
    }

    public function index($id)
    {
        $skill = Skills::where('user_id',$id)->get();
        return response()->json($skill);
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
            'skill' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $skill = new Skills();
        $skill ->skill = $request ->skill;
        $skill ->user_id = $request ->user_id;
        $skill->save();
        return response()->json($skill);
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
            'skill' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $skill = Skills::find($request->id);
        $skill ->skill = $request ->skill;
        $skill ->user_id = $request ->user_id;
        $skill->save();
        return response()->json($skill);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $skill = Skills::find($request->id);
        $skill ->delete();
        return response()->json($skill);
    }
}
