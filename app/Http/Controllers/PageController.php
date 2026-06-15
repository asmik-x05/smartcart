<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function shop()
    {
        return view('shop');
    }

    public function categories()
    {
        return view('categories');
    }

    public function deals()
    {
        return view('deals');
    }

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function forgot_password()
    {
        return view('user.forgot-password');
    }

    public function reset_password()
    {
        return view('user.reset-password');
    }

    public function subscribe_newsletter(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        if ($validator->fails()) {
            toast('Subscribed successfully!', 'success');
            return redirect()->back();
        }

        $subscribe = new NewsletterSubscriber();
        $subscribe->email = $req->email;
        $subscribe->token = \Str::random(32);
        $subscribe->save();

        toast('Subscribed successfully!', 'success');
        return redirect()->back();

    }
}
