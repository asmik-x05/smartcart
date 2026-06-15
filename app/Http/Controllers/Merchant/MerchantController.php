<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MerchantController extends Controller
{
    public function merchant_registration_page(Request $req)
    {

        return view('merchant.register');

    }

    public function merchant_registration(Request $req)
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

    public function merchant_login_page(Request $req)
    {

        return view('merchant.login');
    }

    public function merchant_login(Request $req)
    {

    }

}
