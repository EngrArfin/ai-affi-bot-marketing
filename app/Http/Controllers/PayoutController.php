<?php

namespace App\Http\Controllers;

use App\Models\Payout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayoutController extends Controller
{
    function payout(Request $request){
        $ammount = (integer) $request->ammount;

        if($ammount<1){
            return redirect()->back()->with('insufficient_balance','Insufficient Balance');
        }

        Payout::create(
            [
                "user_id" => Auth::user()->id,
                "ammount" => $ammount
            ]
        );

        return redirect('/dashboard/commission');
    }
}
