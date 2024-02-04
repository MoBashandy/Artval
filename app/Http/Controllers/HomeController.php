<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function MØ(){
        return view('Home.userpage');
    }
    public function discount(Request $request){
        $discount = new Discount;
        $discount -> name = $request->name;
        $discount -> email = $request->email;
        $discount -> phone = $request->phone;
        $discount -> comment = $request->comment;
        $discount ->save();
        return view('Home.userpage',compact('discount'));
    }
}
