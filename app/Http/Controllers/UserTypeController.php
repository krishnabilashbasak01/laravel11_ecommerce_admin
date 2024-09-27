<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTypeController extends Controller
{
    // get all user types
    public function index(Request $request)
    {
        $activeUserTypes = UserType::all();
        $deletedUserTypes = UserType::onlyTrashed()->get();

        return response(
            [
                "status" => "success",
                "data" => [
                    "active" => $activeUserTypes,
                    "deleted" => $deletedUserTypes,
                ],
            ],
            200
        );
    }

    // find admin user by user type
    public function findAdminByUserType($name)
    {
        $userType = UserType::where("name", $name)->first();
        if (!$userType) {
            return response(
                [
                    "status" => "error",
                    "message" => "User type not found",
                ],
                404
            ); // 404 Not Found
        }

        return response([
            "status" => "success",
            "data" => $userType->users,
        ]);
    }

    // store user type
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

    // delete user type by id
    public function destroy($id)
    {
        $deleted = UserType::softDeleteById($id);

        if ($deleted) {
            return response(
                [
                    "status" => "success",
                    "message" => "User type soft deleted successfully",
                ],
                200
            );
        } else {
            return response(
                [
                    "status" => "error",
                    "message" => "Failed to soft delete user type",
                ],
                404
            );
        }
    }

    // Get soft deleted user Types
    public function getSoftDeletedUserTypes()
    {
        $deletedUserTypes = UserType::getSoftDeletedUserTypes();
        if ($deletedUserTypes) {
            return response(
                [
                    "status" => "success",
                    "data" => $deletedUserTypes,
                ],
                200
            );
        } else {
            return response(
                [
                    "status" => "error",
                    "data" => [],
                    "message" => "No Deleted UserType Found",
                ],
                404
            );
        }
    }

    // restore soft deleted user type
    public function restore($id)
    {
        $restored = UserType::restoreSoftDeletedById($id);

        if ($restored) {
            return response(
                [
                    "status" => "success",
                    "message" => "User type restored successfully",
                ],
                200
            );
        } else {
            return response(
                [
                    "status" => "error",
                    "message" => "Failed to restore user type",
                ],
                404
            );
        }
    }

    // permanent delete user type by id
    public function permanentDestroy($id)
    {
        $deleted = UserType::deleteById($id);

        if ($deleted) {
            return response(
                [
                    "status" => "success",
                    "message" => "User type permanently deleted successfully",
                ],
                200
            );
        } else {
            return response(
                [
                    "status" => "error",
                    "message" => "Failed to permanently delete user type",
                ],
                404
            );
        }
    }
}
