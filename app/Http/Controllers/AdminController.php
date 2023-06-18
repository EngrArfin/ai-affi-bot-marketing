<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payout;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function commission(Request $request){
        $order = Order::all();
        $lists = [];
        $total_profit = 0;
        $total_payout = 0;
        $payout = Payout::where('user_id',null)->get();

        for ($i=0; $i < sizeof($order); $i++) {
            $collection = $order[$i];
            $refer_by = User::where('id',$collection->refer)->first();

            array_push($lists,[
                "name" => $collection->name,
                "price" => $collection->price,
                "percentage" => "5%",
                "ammount" => 5/100*($collection->price),
                "refer" => $refer_by
            ]);
        }

        for ($i=0;$i < sizeof($lists);$i++)
        {
            $kopy = $lists[$i];

            $total_profit+=$kopy['ammount'];
        }

        for ($i=0;$i < sizeof($payout);$i++)
        {
            $col = $payout[$i];

            $total_payout+=$col->name;
        }

        $balance = $total_profit-$total_payout;

        return view('admin.pages.commission',[
            "orders" => $lists,
            "profit" => $total_profit,
            "balance" => $balance
        ]);
    }

    function payout_view(){
        $order = Order::all();
        $lists = [];
        $total_profit = 0;
        $total_payout = 0;
        $payout = Payout::where('user_id',null)->get();

        for ($i=0; $i < sizeof($order); $i++) {
            $collection = $order[$i];
            $refer_by = User::where('id',$collection->refer)->first();

            array_push($lists,[
                "name" => $collection->name,
                "price" => $collection->price,
                "percentage" => "5%",
                "ammount" => 5/100*($collection->price),
                "refer" => $refer_by
            ]);
        }

        for ($i=0;$i < sizeof($lists);$i++)
        {
            $kopy = $lists[$i];

            $total_profit+=$kopy['ammount'];
        }

        for ($i=0;$i < sizeof($payout);$i++)
        {
            $col = $payout[$i];

            $total_payout+=$col->name;
        }

        $balance = $total_profit-$total_payout;

        return view('admin.pages.payout',[
            "bal" => $balance
        ]);
    }

    function payout(Request $request){
        $order = Order::all();
        $lists = [];
        $total_profit = 0;
        $total_payout = 0;
        $payout = Payout::where('user_id',null)->get();

        for ($i=0; $i < sizeof($order); $i++) {
            $collection = $order[$i];
            $refer_by = User::where('id',$collection->refer)->first();

            array_push($lists,[
                "name" => $collection->name,
                "price" => $collection->price,
                "percentage" => "5%",
                "ammount" => 5/100*($collection->price),
                "refer" => $refer_by
            ]);
        }

        for ($i=0;$i < sizeof($lists);$i++)
        {
            $kopy = $lists[$i];

            $total_profit+=$kopy['ammount'];
        }

        for ($i=0;$i < sizeof($payout);$i++)
        {
            $col = $payout[$i];

            $total_payout+=$col->name;
        }

        $balance = $total_profit-$total_payout;

        if($request->ammount<1 || $balance>$request->ammount){
            return redirect()->back()->with('insufficient_balance','Insufficient Balance');
        }

        Payout::create([
            "user_id" => null,
            "ammount" => $request->ammount
        ]);

        return redirect('/admin/commissions');
    }
}
