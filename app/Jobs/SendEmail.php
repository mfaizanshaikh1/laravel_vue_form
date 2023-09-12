<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
// use Illuminate\Support\Facades\Mail;
use App\Mail\YourEmailMailable;
use Mail;


class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function handle()
    {
        // Send the email using the data from $this->formData
        $formData = new YourEmailMailable();
        Mail::to($this->formData)->send($formData);
    }
}
