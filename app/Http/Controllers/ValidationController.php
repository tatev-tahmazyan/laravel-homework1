<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
    public function showform() {
        return view('validation');
    }
    public function validateform(Request $request) {
        echo "<pre>";
        print_r($request->only(['name','email','address','password']));
        echo "</pre>";
        $this->validate($request,[
            'name'=>'required|alpha_spaces',
            'email'=>'required|email:rfc,dns',
            'address' => 'nullable|regex:/^[A-Za-z0-9][A-Za-z0-9\s]*$/', //alpha-num
            'password'=>'required|min:8'
        ]);
    }
}
