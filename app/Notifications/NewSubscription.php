<?php

namespace App\Notifications;

use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewSubscription extends Notification
{
    use Queueable;

    /**
     * The Subscription
     *
     * @var Loan
     */
    public $loan;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Loan $loan)
    {
        $this->loan = $loan;
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
        $currentDateTime = Carbon::now();
        $newDateTime = date_add($currentDateTime, date_interval_create_from_date_string("5 days"));
        return (new MailMessage)
                    ->line(
                        'We`re thrilled to have you abroad.
                                Please come to the office at 12 Darling Road on '.date_format($newDateTime, 'Y-m-d').'. We are open 24 hrs ')
                    ->line('Your Loan '.$this->loan->name.'We looking forward to see you')
                    ->action('Not Sure Choose Again!', route('display.loans'))
                    ->line('Thank you for using our application!');
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