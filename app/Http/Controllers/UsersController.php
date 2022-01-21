<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthTokenRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    public function createToken(AuthTokenRequest $request)
    {
        $user = User::where('email', $request->email)->first(); // SELECT FROM users where email = 'ulises@example.com' LIMIT 1
        $user  = null;
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken($request->device_name)->plainTextToken;
    }
}
