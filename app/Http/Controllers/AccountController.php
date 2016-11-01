<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AccountRequest;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        parent::__construct();
    }

    public function edit()
    {
        return view('accounts.edit');
    }

    public function update(AccountRequest $request)
    {
        $user = User::findOrFail(Auth::id());
        
        $update = $request->all();

        foreach ($update as $key => $value)
        {
                if(in_array($key, $user->getFillable()))
                {
                    if ($key === 'password')
                    {
                        $user->$key = bcrypt($value);
                    }
                    else
                    {
                        $user->$key = $value;
                    }
                }
        }

        $user->save();

        flash()->success('Success!', "Your account has been updated.");

        return back();
    }

}
