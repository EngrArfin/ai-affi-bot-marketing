<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'subscription'
    ];

    protected $appends = ['is_subscribed','comission','balance','clicks'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function shortlinks(){
        return $this->hasMany(Shortlink::class,'user_id');
    }

    public function orders(){
        return $this->hasMany(Order::class,'refer');
    }

    public function getComissionAttribute()
    {
        $orders = Order::where('refer',$this->id)->get();
        $commision = 0;

        for ($i=0; $i < sizeof($orders); $i++) {
           $commision += 7/100*$orders[$i]->price;
        }

        return $commision;
    }

    public function getBalanceAttribute()
    {
        $orders = Order::where('refer',$this->id)->get();
        $payouts = Payout::where('user_id',$this->id)->get();
        $commision = 0;

        $total_payouts = 0;

        for ($i=0; $i < sizeof($orders); $i++) {
           $commision += 7/100*$orders[$i]->price;
        }

        for ($i=0; $i < sizeof($payouts); $i++) {
            $total_payouts += $payouts[$i]->ammount;
        }

        $balance = ($commision-$total_payouts);

        return $balance;
    }

    public function getIsSubscribedAttribute()
    {
        return $this->subscription!=null ? true : false;
    }

    public function getClicksAttribute()
    {
        $shortlinks = Shortlink::where('user_id',$this->id)->get();

        $commision = 0;

        for ($i=0; $i < sizeof($shortlinks); $i++) {
            $commision += $shortlinks[$i]->clicks;
        }

        return $commision;
    }
}
