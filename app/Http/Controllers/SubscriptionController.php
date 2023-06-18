<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    function index(){
        return view('page.subscriptions');
    }

    function subscribe($num){
        User::where('id',Auth::user()->id)->first()->update([
            'subscription' => $num
        ]);

        return redirect('/dashboard');
    }

    function all_sessions(Request $request){
        return $request->session()->all();
    }
}
