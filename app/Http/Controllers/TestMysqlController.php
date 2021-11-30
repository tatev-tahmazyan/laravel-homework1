<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class TestMysqlController extends Controller
{
    public function index(){
        $users = DB::table('users')
            ->join('companies','users.company_id', '=', 'companies.id')
            ->select(['name', 'title as company_title'])
            ->get();
        foreach ($users as $user) {
            echo $user->name . " " . $user->company_title . "<br>";
        }

    }
}
