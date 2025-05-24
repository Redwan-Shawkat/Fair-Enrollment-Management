<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordCustomNotification extends Notification
{

    use Queueable;

    // Later for password reset token
    protected $token;

    /**
     * Create a new notification instance.
     */
    // public function __construct()
    // Later for password reset token
    public function __construct($token)
    {
        // Later for password reset token
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {

        // Later for password reset token
        $url = url('/reset-password?token='.$this->token . '&email='. urlencode($notifiable->email));

        return (new MailMessage)
            // Later for password reset token
            ->subject('Reset Your Password')
            // Before
            ->line('The introduction to the notification.')
            // Before
            ->action('Notification Action', $url)
            // Later for password reset token
            ->line('This password reset link will expire soon for security reasons.')
            // Later for password reset token
            ->line('If you did not request a password reset, no further action is required.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            // Later for password reset token
            'reset_url' => url('/reset-passowrd?token=' . $this->token . '$email=' . urlencode($notifiable->email)),
        ];
    }
}
