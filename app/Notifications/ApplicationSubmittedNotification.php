<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class ApplicationSubmittedNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $applicationData;
    public function __construct($applicationData)
    {
        $this->applicationData = $applicationData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        Log::info("Sending application submitted notification to HR:", $this->applicationData);

        return (new MailMessage)
            ->subject('New Application Submitted')
            ->line('A new application has been submitted:')
            ->line('First Name: ' . $this->applicationData['first_name'])
            ->line('Last Name: ' . $this->applicationData['last_name'])
            ->line('Contact Number: ' . $this->applicationData['contact_no'])
            ->line('Message: ' . $this->applicationData['message'])
            // Add more relevant lines here
            ->action('View Application', url('/admin/application')); // Link to the admin application page
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
