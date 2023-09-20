<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truck;

class RegisterController extends Controller
{
    public function admin_register()
    {
        $trucks = Truck::all();
        return view('auth.admin_register',compact('trucks'));
    }
}
