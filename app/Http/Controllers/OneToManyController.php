<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

class OneToManyController extends Controller
{
    public function company($id){
        $company = Company::with('users')->find($id);
        dd($company);
    }

    public function users(int $id){
        //1
        /*
        $user = User::find($id);
        $company = $user->company;
        dd($company);
        */

        //2
        $user = User::with('company')->find($id);
        dd($user);
    }
}
