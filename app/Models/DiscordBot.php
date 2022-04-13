<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DiscordBot extends Model
{
    use HasFactory;
    use Notifiable;

    public function routeNotificationForDiscord()
    {
        return $this->discord_channel;
    }
}
