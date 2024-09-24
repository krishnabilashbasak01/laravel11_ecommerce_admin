<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTypeController extends Controller
{

    public function index(Request $request)
    {
        $userTypes = UserType::all();

        return response([
            'status' => 'success',
            'data' => $userTypes
        ], 200);
    }

    public function findAdminByUserType($name)
    {
        $userType = UserType::where('name', $name)->first();
        if (!$userType) {
            return response([
                'status' => 'error',
                'message' => 'User type not found',
            ], 404); // 404 Not Found
        }

        return response([
            'status' => 'success',
            'data' => $userType->users,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string|max:255",
        ]);

        if ($validator->fails()) {
            return response(
                [
                    "status" => "error",
                    "message" => "Validation failed",
                    "errors" => $validator->errors(),
                ],
                422
            );
        }

        $userType = UserType::create([
            "name" => $request->name,
        ]);


        return response(
            [
                "status" => "success",
                "message" => "User type created successfully",
                "data" => $userType,
            ],
            201
        );
    }
}
