<?php

namespace App\Post_04_Vue_Api_Comparision\IO\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class UsersController
{
    public function index(): JsonResponse
    {
        return response()->json(User::all());
    }
}
