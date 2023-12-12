<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getList() {
        $user = User::select(
            'users.*',
            'user_domicilio.*',
            DB::raw('YEAR(NOW()) - YEAR(users.fecha_nacimiento) AS edad')
        )
         ->join('user_domicilio', 'users.id', '=', 'user_domicilio.user_id')
         ->get();
        return response()->json($user);
    }
}
