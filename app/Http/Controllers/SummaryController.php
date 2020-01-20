<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;
use Validator;
use Illuminate\Support\Facades\DB;
class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('summaryy')
        ->join('users', 'summaryy.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('summaryy.*')
        ->get();
        return response()->json($cv);
    }

    public function index($id)
    {
        $summary = Summary::where('user_id',$id)->get();
        return response()->json($summary);
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
            'description' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $summary = new Summary();
        $summary ->description = $request ->description;
        $summary ->user_id = $request ->user_id;
        $summary->save();
        return response()->json($summary);
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
            'description' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $sammary = Summary::find($request->id);
        $sammary ->description = $request ->description;
        // $sammary ->user_id = $request ->user_id;
        $sammary->save();
        return response()->json($sammary);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $summary = Summary::find($request->id);
        $summary->delete();
        return response()->json($summary);
    }
}
