<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class RegisterController extends ResponseController
{
    public function register(Request $request): JsonResponse {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'rol_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.',
            $validator->errors());
        }
        $existingemail = User::where('email', $request->email)->first();

        if ($existingemail) {
            return response()->json(['message' => 'Email already exists'], 409);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $token = $user->createToken('MyApp')->accessToken;
        return response()->json([
            'token'=> $token,
            'id'=>$user->id,
            'name'=>$user->name,
            'rol_id'=>$user->rol_id,
            'messagge' =>'Register succesful'],200);

    }
    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;
            return response()->json([
                'token'=> $token,
                'id'=>$user->id,
                'name'=>$user->name,
                'rol_id'=>$user->rol_id,
                'messagge' =>'Login succesful'],200);

        } else {
            return $this->sendError(
                'Unauthorized.',
                ['error' => 'Unauthorized']
            );
            alert('Invalid Email or password.');
        }
    }
/*        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        return $this->sendResponse($success,
        'User register successfully.');
    }

    public function login(Request $request): JsonResponse{
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')-> accessToken;
            $success['name'] = $user->name;

            return $this->sendResponse($success,
            'User login successfully.');
        }
        else{
            return $this->sendError('Unauthotized.',
            ['error'=>'Unauthorized']);
        }
    }*/
}
