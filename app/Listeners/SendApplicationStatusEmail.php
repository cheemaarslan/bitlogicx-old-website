<?php

namespace App\Listeners;

use App\Models\Template;
use App\Mail\ApplicationStatusEmail;
use Illuminate\Support\Facades\Mail;
use App\Events\ApplicationStatusUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendApplicationStatusEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $delay = 60;

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ApplicationStatusUpdated  $event
     * @return void
     */
    public function handle(ApplicationStatusUpdated $event)
    {
        $template = Template::where('template_for', $event->application->status)->first();
        if($template){
            Mail::to($event->application->email)->send(new ApplicationStatusEmail($template));
        }
    }
}
