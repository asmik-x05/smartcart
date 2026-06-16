<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Password as PasswordFacade;

use Laravel\Socialite\Socialite;


class AuthController extends Controller
{

    // User Login
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        toast('The provided credentials do not match our records.', 'error');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // User Registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'required|max:60',
            "email" => 'required|unique:users,email',
            "password" => [
                'required',
                'confirmed',
                Password::min(8)->mixedCase()->numbers()->symbols()
            ],
        ]);

        if ($validator->fails()) {
            toast($validator->errors()->first(), 'error');

            return back()->withErrors($validator)->onlyInput('email', 'name');

        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            toast('Registration successful! ', 'success');
            Auth::guard('web')->login($user);
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {

            toast('Registration failed. Please try again later.', 'error');
            return back()->withErrors($validator)->onlyInput('email', 'name');
        }

    }

    // User Logout

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            toast($validator->errors()->first(), 'error');
            return back()->withErrors($validator);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            toast('if User exists, Password reset link has been sent. ', 'success');
            return back()->withErrors(['email' => 'No account found with that email.']);
        }

        $token = PasswordFacade::createToken($user);

        $resetUrl = url("/reset-password/{$token}?email={$user->email}");

        Mail::to($request->email)->send(new ResetPassword($resetUrl, $user->name));

        toast('Password reset link has been sent to your email.', 'success');

        return redirect()
            ->route('user.forgot-password.view')
            ->with('success', 'Password reset link has been sent to your email.');
    }

    public function resetPassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "token" => 'required',
            "email" => 'required|email|exists:users,email',
            "password" => [
                'required',
                'confirmed',
                Password::min(8)->mixedCase()->numbers()->symbols()
            ],
        ]);

        if ($validator->fails()) {
            toast($validator->errors()->first(), 'error');
            return back()->withErrors($validator)->onlyInput('email');
        }

        $status = PasswordFacade::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );


        if ($status !== PasswordFacade::PASSWORD_RESET) {
            toast(__($status), 'error');
            return back()->withErrors(['email' => 'Failed to reset password. Please try again.']);
        }

        toast('Password has been reset successfully.', 'success');

        return redirect()
            ->route('user.login')
            ->with('success', 'Password has been reset successfully.');

    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        $user = Socialite::driver('google')->user();

        $old_user = User::where('email', $user->email)->first();
        if ($old_user) {
            Auth::guard('web')->login($old_user);
            return redirect()->route('home');
        } else {
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->password = bcrypt(uniqid());
            $new_user->save();

            Auth::guard('web')->login($new_user);
            return redirect()->route('home');
        }
    }
}
