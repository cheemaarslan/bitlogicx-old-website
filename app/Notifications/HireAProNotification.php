<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class HireAProNotification extends Notification
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
            ->subject('New Quotation Submitted')
            ->line('A new quotation has been submitted:')
            ->line('First Name: ' . $this->applicationData['fname'])
            ->line('Last Name: ' . $this->applicationData['lname'])
            ->line('Contact Email: ' . $this->applicationData['email'])
            ->line('Service Required: ' . $this->applicationData['service'])
            ->line('Message: ' . $this->applicationData['message'])
            // Add more relevant lines here
            ->action('View Quotation', url('/admin/hire')); // Link to the admin application page
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
