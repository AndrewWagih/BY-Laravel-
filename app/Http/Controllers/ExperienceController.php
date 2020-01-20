<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use Validator;
use Illuminate\Support\Facades\DB;
class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('experience')
        ->join('users', 'experience.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('experience.*')
        ->get();
        return response()->json($cv);
    }

    public function index($id)
    {
        $experience = Experience::where('user_id',$id)->get();
        return response()->json($experience);
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
            'position' => 'required',
            'company' => 'required', 
            'date_from' => 'required',
            'date_to' => 'required',
            'description' => 'required', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $experience = new Experience();
        $experience ->position = $request ->position;
        $experience ->company = $request ->company;
        $experience ->date_from = $request ->date_from;
        $experience ->date_to = $request ->date_to;
        $experience ->description = $request ->description;
        $experience ->user_id = $request ->user_id;
        $experience->save();
        return response()->json($experience);
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
            'position' => 'required',
            'company' => 'required', 
            'date_from' => 'required',
            'date_to' => 'required',
            'description' => 'required', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $experience = Experience::find($request ->id);
        $experience ->position = $request ->position;
        $experience ->company = $request ->company;
        $experience ->date_from = $request ->date_from;
        $experience ->date_to = $request ->date_to;
        $experience ->description = $request ->description;
        $experience ->user_id = $request ->user_id;
        $experience->save();
        return response()->json($experience);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $experience = Experience::find($request ->id);
        $experience->delete();
        return response()->json($experience);
    }
}
