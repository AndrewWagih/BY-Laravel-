<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PersonalInfo;
use Validator;
use Illuminate\Support\Facades\DB;
class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv($userName)
    {
         $cv = DB::table('personal_info')
        ->join('users', 'personal_info.user_id', '=', 'users.id')
        ->where('users.user_name','=',$userName)
        ->select('personal_info.*')
        ->get();
        return response()->json($cv);
    }

    public function index($id)
    {           
        $personal_info = PersonalInfo::where('user_id',$id)->get();
        return response()->json($personal_info);
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
            'first_name' => 'required',
            'last_name' => 'required', 
            'profession' => 'required',
            'address' => 'required',
            'phone' => 'required', 
            'email' => 'required',
            'date_birth' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $personal_info = new PersonalInfo();
        $personal_info ->first_name = $request ->first_name;
        $personal_info ->last_name = $request ->last_name;
        $personal_info ->profession = $request ->profession;
        $personal_info ->address = $request ->address;
        $personal_info ->phone = $request ->phone;
        $personal_info ->email = $request ->email;
        $personal_info ->date_birth = $request ->date_birth;
        $personal_info ->user_id = $request ->user_id;
        $personal_info->save();
        return response()->json($personal_info);
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
            'first_name' => 'required',
            'last_name' => 'required', 
            'profession' => 'required',
            'address' => 'required',
            'phone' => 'required', 
            'email' => 'required',
            'date_birth' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }          
        $personal_info = PersonalInfo::find($request->id);
        $personal_info ->first_name = $request ->first_name;
        $personal_info ->last_name = $request ->last_name;
        $personal_info ->profession = $request ->profession;
        $personal_info ->address = $request ->address;
        $personal_info ->phone = $request ->phone;
        $personal_info ->email = $request ->email;
        $personal_info ->date_birth = $request ->date_birth;

        $personal_info->save();
        return response()->json($personal_info);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $personal_info = PersonalInfo::find($request->id);
        $personal_info->delete();
        return response()->json($personal_info);
    }
}
