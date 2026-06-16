<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Mail\MerchantRegistrationRequest;
use App\Mail\ResetPassword;
use App\Models\Admin;
use App\Models\Merchant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Password as PasswordFacade;

class MerchantAuthController extends Controller
{
    // Merchant Resistration

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:merchants,email',
            'contact_no' => 'required|numeric|digits:10',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            toast($validator->errors()->first('email'), 'error');
            return redirect()
                ->back()
                ->withInput();
        }

        $merchant = new Merchant();
        $merchant->name = $req->name;
        $merchant->email = $req->email;
        $merchant->contact_no = $req->contact_no;
        $merchant->message = $req->message;

        $merchant->save();

        $admins = Admin::all();

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new MerchantRegistrationRequest($merchant));
        }

        toast('Your Form has been submitted!', 'success');

        return redirect()
            ->route('merchant.register')
            ->with('success', 'Merchant registered successfully.');

    }

    // Merchant Login

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('merchant')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        toast('The provided credentials do not match our records.', 'error');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Merchant Logout

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('merchant')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:merchants,email',
        ]);

        if ($validator->fails()) {
            toast($validator->errors()->first(), 'error');
            return back()->withErrors($validator);
        }

        $merchant = Merchant::where('email', $request->email)->first();

        if (!$merchant) {
            toast('if merchant exists, Password reset link has been sent. ', 'success');
            return back()->withErrors(['email' => 'No account found with that email.']);
        }

        $token = PasswordFacade::broker('merchants')->createToken($merchant);

        $resetUrl = url("/merchant/reset-password/{$token}?email={$merchant->email}");

        Mail::to($request->email)->send(new ResetPassword($resetUrl, $merchant->name));
        toast('Password reset link has been sent to your email.', 'success');

        return redirect()
            ->route('merchant.forgot-password.view')
            ->with('success', 'Password reset link has been sent to your email.');
    }
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "token" => 'required',
            "email" => 'required|email|exists:merchants,email',
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
        $status = PasswordFacade::broker('merchants')->reset(
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
            ->route('merchant.login')
            ->with('success', 'Password has been reset successfully.');

    }
}

