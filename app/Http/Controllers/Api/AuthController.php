<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ApiLoginRequest;
use App\Http\Resources\ApiAuthResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 *
 */
class AuthController extends Controller
{

    /**
     * @param ApiLoginRequest $request
     * @return ApiAuthResource
     */
    public function login(ApiLoginRequest $request)
    {
        $request->authenticate();
        $user = $request->user();
        $token = $user->createToken('app')->plainTextToken;

        return ApiAuthResource::make(['user' => $user, 'token' => $token]);
    }// login

}// AuthController
