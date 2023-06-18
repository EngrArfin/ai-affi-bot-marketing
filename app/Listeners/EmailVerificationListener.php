<?php

namespace App\Listeners;

use App\Events\EmailVerificationEvent;
use App\Mail\EmailVerificationMail;
use App\Models\Otp;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EmailVerificationListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EmailVerificationEvent $event): void
    {
        $code = rand(100000,999999);

        Otp::create([
            "email" => $event->user->email,
            "attempt" => "email-verification",
            "otp" => $code,
            'expires_at' => Carbon::now()->addMinutes(15)
        ]);

        Mail::to($event->user->email)->send(new EmailVerificationMail([
            "user" => $event->user,
            "code" => $code
        ]));
    }
}
