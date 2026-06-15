<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\Request;


class MerchantController extends Controller
{
    public function register(Request $req)
    {

        return view('merchant.register');

    }



    public function login(Request $req)
    {

        return view('merchant.login');
    }

    public function forgot_password()
    {
        return view('merchant.forgot-password');
    }

    public function reset_password()
    {
        return view('merchant.reset-password');
    }

}
