<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class UsertmpController extends BaseController {

    public function users() {
        $users = DB::select('select * from users where user_is_active = ?', [1]);

        return view("ong.users", ['users' => $users]);
    }

    public function user($user) {
        $users = DB::select('select * from users where id = ?', [$user]);

        return view("ong.user", ['user' => $users[0]]);
    }
    

}
