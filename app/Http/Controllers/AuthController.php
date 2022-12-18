<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Jobs\SendEmailVerficationLink;
use App\Models\AuthActivity;
use App\Models\FirmSize;
use App\Services\AuthActivityService;
use App\Services\UserService;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerView()
    {
        $firmSizes = FirmSize::all();
        return view('pages.auth.register', [
            'firmSizes' => $firmSizes
        ]);
    }

    public function registerAction(RegisterRequest $request, UserService $userService, AuthActivityService $authActivityService)
    {
        $user = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'firm_size_id' => $request->firm_size
        ];

        $userService->create($user);

        Auth::attempt($request->only('email', 'password'));

        $authActivityService->create(['user_id' => Auth::id(), 'type' => AuthActivity::LOGIN_TYPE]);

        SendEmailVerficationLink::dispatch($userService->user);

        return view('pages.auth.email-verification-send');
    }

    public function loginView()
    {
        return view('pages.auth.login');
    }

    public function loginAction(LoginRequest $request, AuthActivityService $authActivityService)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials, $request->remember_me)) {

            $request->session()->regenerate();

            $authActivityService->create(['user_id' => Auth::id(), 'type' => AuthActivity::LOGIN_TYPE]);

            return redirect()->intended(route('dashboard.view'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function verificationNotice()
    {
        return view('pages.auth.verify-email');
    }

    public function verficationVerfiy(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()->route('dashboard.view');
    }

    public function resendVerificationLink(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent to your registred Email address!');
    }

    public function logout(Request $request, AuthActivityService $authActivityService)
    {
        $id = Auth::id();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $authActivityService->create(['user_id' => $id, 'type' => AuthActivity::LOGOUT_TYPE]);

        return redirect()->route('login.view');
    }
}
