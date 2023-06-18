<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shortlink;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShortlinkController extends Controller
{
    function create(){
        for ($i=0; $i < Product::all()->count(); $i++) {
            Shortlink::create([
                'product_id' => Product::all()[$i]->id,
                'user_id' => Auth::user()->id
            ]);
        }

        return true;
    }

    function link(Request $request){
        $id = $request->route('link');
        $shortlink = Shortlink::where('id',$id)->first();
        $product = Product::where('id',$shortlink->product_id)->first();
        Shortlink::where('id',$id)->update([
            'clicks' => (int) $shortlink->clicks+1
        ]);

        $client = new Client();

        $client->request('GET', 'http://localhost:9000/store-api.php', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Access-Control-Allow-Credentials' => true
            ],
            'query' => [
                'refer_id' => $shortlink->user_id
            ],
        ]);

        $request->session()->put('refer_id',$shortlink->user_id);

        return redirect($product->product_url);
    }
}
