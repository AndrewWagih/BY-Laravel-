<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 
use App\User;
use Illuminate\Http\Request;
use Validator;
class PassportController extends Controller
{
    public $successStatus = 200;
     /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'user_name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone_number' => 'required|min:8',
            'birthday' => 'required|min:6',
            'gender' => 'required|min:4',
            'gender' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $user = new User();
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->user_name=$request->user_name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->phone_number=$request->phone_number;
        $user->birthday=$request->birthday;
        $user->gender=$request->gender;
        $user->save();

        if($user->save()){
            $token = $user->createToken('TutsForWeb')->accessToken;
            return response()->json(['token' => $token], 200);
        }else{
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
 
        
 
        
    }
 
    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
        
        // if (auth()->attempt($credentials)) {
        //     $token = auth()->user()->createToken('TutsForWeb')->accessToken;
        //     return response()->json(['token' => $token], 200);
        // } else {
        //     return response()->json(['error' => 'UnAuthorised'], 401);
        // }
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
 
    /**
     * Returns Authenticated User Details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }
}
