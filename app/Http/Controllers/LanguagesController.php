<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Languages;
use Validator;
use Illuminate\Support\Facades\DB;
class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('languages')
        ->join('users', 'languages.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('languages.*')
        ->get();
        return response()->json($cv);
    }

    public function index($id)
    {
        $language = Languages::where('user_id',$id)->get();
        return response()->json($language);
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
            'language' => 'required',
            'mastery' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $language = new Languages();
        $language ->language = $request ->language;
        $language ->mastery = $request ->mastery;
        $language ->user_id = $request ->user_id;
        $language->save();
        return response()->json($language);
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
            'language' => 'required',
            'mastery' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $language = Languages::find($request->id);
        $language ->language = $request ->language;
        $language ->mastery = $request ->mastery;
        $language ->user_id = $request ->user_id;
        $language->save();
        return response()->json($language);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $language = Languages::find($request->id);
        $language->delete();
        return response()->json($language);
    }
}
