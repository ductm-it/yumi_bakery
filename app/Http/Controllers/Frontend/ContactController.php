<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact(){
        return view('frontend.pages.contact.index');
    }

    public function postContact(Request $request){
        dd($request->all());
    }
}
