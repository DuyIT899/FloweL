<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class dashboardController extends Controller
{
    public function main(Request $request){
        
        Alert::success('Success Title', 'Success Message');

        return view('pages.dashboard');
    }
    public function registerAndLogin(Request $request){

        return view('pages.RegisterAndLogin');
    }

    public function test(Request $request){
        echo $request->editor;
    }
}
