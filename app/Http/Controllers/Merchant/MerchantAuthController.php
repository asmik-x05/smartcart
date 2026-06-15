<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        toast('Password reset link has been sent to your email.', 'success');

        return redirect()
            ->route('merchant.forgot-password.view')
            ->with('success', 'Password reset link has been sent to your email.');
    }
    public function resetPassword(Request $request)
    {
        toast('Password has been reset successfully.', 'success');

        return redirect()
            ->route('merchant.login')
            ->with('success', 'Password has been reset successfully.');

    }
}

