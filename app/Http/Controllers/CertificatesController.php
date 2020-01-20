<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificates;
use Validator;
use Illuminate\Support\Facades\DB;
class CertificatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('certif')
        ->join('users', 'certif.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('certif.*')
        ->get();
        return response()->json($cv);
    }
    public function index($id)
    {
        $certificate = Certificates::where('user_id',$id)->get();
        return response()->json($certificate);
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
        $certificate = new Certificates();
        $certificate ->title = $request ->title;
        $certificate ->date = $request ->date;
        $certificate ->user_id = $request ->user_id;
        $certificate->save();
        return response()->json($certificate);
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
        $certificate = Certificates::find($request->id);
        $certificate ->title = $request ->title;
        $certificate ->date = $request ->date;
        $certificate ->user_id = $request ->user_id;
        $certificate->save();
        return response()->json($certificate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $certificate = Certificates::find($request->id);
        $certificate->delete();
        return response()->json($certificate);
    }
}
