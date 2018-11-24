<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class UserController extends BaseController {

    public function users() {
        // $users = DB::select('select * from users where active = ?', [1]);

        return view("test", ['users' => [
                [
                    'id' => 1,
                    'name' => 'aaa',
                    'first_name' => 'aaa',
                    'last_name' => 'aaa',
                    'email' => 'test@test.es'
                ],
                [
                    'id' => 2,
                    'name' => 'bbb',
                    'first_name' => 'bbb',
                    'last_name' => 'bbb',
                    'email' => 'testb@test.es'
                ],
                [
                    'id' => 3,
                    'name' => 'ccc',
                    'first_name' => 'ccc',
                    'last_name' => 'ccc',
                    'email' => 'testc@test.es'
                ]
        ]]);
    }

}
