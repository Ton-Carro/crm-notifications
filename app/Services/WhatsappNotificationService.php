<?php

namespace App\Services;

use Illuminate\Notifications\Notification;
use CarroPublic\Notifications\Channel\WhatsAppChannel;

class WhatsappNotificationService extends Notification
{
    public function via($notifiable)
    {
        return [ WhatsAppChannel::class ];
    }

    public function toWhatsApp($notifiable)
    {
        return new LaravelTwilioMessage("Message Content");
    }
}