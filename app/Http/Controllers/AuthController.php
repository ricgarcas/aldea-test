<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function token()
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'device' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        if (!auth()->attempt(request()->only('email', 'password'))) {
            return response()->json([
                'message' => 'No hemos podido encontrar un usuario con estas credenciales.'
            ], 401);
        }

        return response()->json([
            'token' => auth()->user()->createToken(request('device'))->plainTextToken
        ], 201);
    }
}
