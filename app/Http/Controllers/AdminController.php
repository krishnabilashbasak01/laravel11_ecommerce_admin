<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Contracts\View\View;
class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view("admin.dashboard");
    }

    public function login(Request $request): RedirectResponse|View
    {
        if ($request->isMethod("post")) {
            $credentials = $request->only("email", "password");
            $remember = $request->has("remember");

            if (Auth::guard("admin")->attempt($credentials, $remember)) {
                return redirect("admin/dashboard");
            } else {
                return redirect("admin/login")->with(
                    "error_message",
                    "Invalid Email or Password!"
                );
            }
        }
        return view("admin.login");
    }

    public function users(Request $request): RedirectResponse|View
    {
        return view("admin.users");
    }

    public function logout()
    {
        Auth::guard("admin")->logout();
        return redirect("admin/login");
    }
}
