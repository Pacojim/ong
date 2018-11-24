<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use DB;
use Illuminate\Http\Request;

class UserController extends BaseController {

    public function users() {
        $users = DB::select('select * from users where user_is_active = ?', [1]);
        return view("ong.users", ['users' => $users]);
    }

    public function gestion($idUser = 0, Request $request) {
        if ($idUser > 0) {
            $user = User::find($idUser);
                        $user->name = $request->get('name');
            $user->first_name = $request->get('first_name');
            $user->last_name = $request->get('last_name');
            $user->address = $request->get('address');
            $user->age = $request->get('age');
            $user->email = $request->get('email');
            $user->demand = $request->get('demand');
            $user->save();
        } else {
            $user = new User();
            $user->name = $request->get('name');
            $user->first_name = $request->get('first_name');
            $user->last_name = $request->get('last_name');
            $user->address = $request->get('address');
            $user->age = $request->get('age');
            $user->email = $request->get('email');
            $user->password = $request->get('password');
            $user->demand = $request->get('demand');
            $user->save();
        }
        return view("ong.user", ['user' => $user, 'uriPost' => '/users-gestion/' . $user->id]);
    }

    public function nuevoUsuario() {
        return view("ong.user", ['user' => new \stdClass(), 'uriPost' => '/users-gestion/']);
    }

    public function getUser($idUser) {
        $user = DB::select('select * from users where user_is_active = ? AND id = ?', [1, $idUser]);
        return view("ong.user", ['user' => $user[0], 'uriPost' => '/users-gestion/' . $user[0]->id]);
    }

    public function delete($idUser) {
        $users = DB::update('update users set user_is_active = ? where id = ?', [0, $idUser]);
        return view("ong.users", ['users' => $users]);
    }

}
