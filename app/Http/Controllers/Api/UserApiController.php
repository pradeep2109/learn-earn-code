<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    //
    public function userData($user_id){
        $users = User::find($user_id);
        return $users ?? [];
    }
}
