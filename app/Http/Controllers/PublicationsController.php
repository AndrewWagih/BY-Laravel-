<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publications;
use Validator;
use Illuminate\Support\Facades\DB;
class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('publications')
        ->join('users', 'publications.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('publications.*')
        ->get();
        return response()->json($cv);
    }

    public function index($id)
    {
        $publications = Publications::where('user_id',$id)->get();
        return response()->json($publications);
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
            'title' => 'required',
            'date' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $publications = new Publications();
        $publications ->title = $request ->title;
        $publications ->date = $request ->date;
        $publications ->user_id = $request ->user_id;
        $publications->save();
        return response()->json($publications);
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
            'title' => 'required',
            'date' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $publications = Publications::find($request->id);
        $publications ->title = $request ->title;
        $publications ->date = $request ->date;
        $publications ->user_id = $request ->user_id;
        $publications->save();
        return response()->json($publications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $publications = Publications::find($request->id);
        $publications->delete();
        return response()->json($publications);
    }
}
