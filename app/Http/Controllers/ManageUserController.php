<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ManageUserController extends Controller
{
    public function manageUserView(UserService $userService)
    {
        $users = $userService->getAllUsers();
        return view('pages.user.manage-user', [
            'users' => $users
        ]);
    }

    public function manageUserAction(Request $request, UserService $userService)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
        ], [
            'email.required' => 'Please enter a e-mail address',
            'email.email' => 'Please enter valid e-mail address',
        ]);

        if ($validator->fails()) {
            return apiResponse([
                'data' => $validator->errors(),
                'message' => 'Invalid Input',
                'code' => Response::HTTP_FORBIDDEN,
                'success' => false
            ]);
        }

        $userService->create(['email' => $request->email]);

        return apiResponse([
            'message' => 'Invitation sent successfully!'
        ]);
    }
}
