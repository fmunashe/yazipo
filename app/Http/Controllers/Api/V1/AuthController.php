<?php
/*
 * This Application Was Designed, Developed & Maintained with {❤️ + ☕️} by Eng. Golden. T. Chimusinde. Copyright (c) 2021.
 */

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public final function login(Request $request): JsonResponse
    {
        Log::info('AuthController: login');
        $loginData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($loginData)) {
            return response()->json([
                'code' => 503,
                'message' => 'Invalid Credentials.',
            ], 503);
        }
        $user = Auth::user();

        $user_obj[] = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ];

        $user->tokens()->delete();
        $token = $user->createToken(Auth::user()->email, ["*"], Carbon::now()->addHours(24));

        return response()->json([
            'code' => 200,
            'message' => 'Login Successfully',
            'token' => $token->plainTextToken,
            'user' => $user_obj[0]
        ]);
    }

}
