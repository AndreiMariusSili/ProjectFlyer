<?php

namespace App\Http\Controllers\Traits;

use App\Flyer;
use Illuminate\Http\Request;



trait AuthorizesUsers
{
    /**
     * Checks if the user created a flyer.
     * @param  Request $request 
     * @return boolean
     */
    public function userCreatedFlyer(Request $request)
    {
        return Flyer::where([
            'zip' => $request->zip,
            'street' => $request->street,
            'user_id' => $this->user->id
        ])->exists();
    }

    /**
     * Returns message or redirect based on type of unauthorized access.
     * @param  Request $request
     * @return response or redirect
     */
    public function unauthorized(Request $request)
    {
        if ($request->ajax())
        {
            return response(["message" => "No way."], 403);
        }

        flash()->error("Error!", "No Way.");
        
        return redirect('/');
    }
}
