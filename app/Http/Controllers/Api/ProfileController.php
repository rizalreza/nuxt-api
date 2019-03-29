<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\JWTAuth;

class ProfileController extends Controller
{
    protected $auth;

    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }
    public function show(Request $request)
    {
        return \response()->json([
            'success' => true,
            'data' => $request->user()
        ], 200);
    }

    public function logout()
    {
        $this->auth->invalidate();
        return \response()->json([
            'success' => true,
            'data' => 'User loged out'
        ], 200);
    }
}
