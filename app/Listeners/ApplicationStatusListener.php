<?php

namespace App\Listeners;

use App\Mail\ApplicationStatusEmail;
use App\Models\Template;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicationStatusListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $application = $event->application;
        $template = Template::where('template_for', $application->status)->first();
        Mail::to($application->email)->send(new ApplicationStatusEmail($template));

    }
}
