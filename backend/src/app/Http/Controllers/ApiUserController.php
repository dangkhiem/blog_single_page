<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Http\Requests\ApiRegisterRequest;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    public function login(ApiLoginRequest $request)
    {
        return 123213123;
    }

    public function register(ApiRegisterRequest $request)
    {
        return 456;
    }
}
