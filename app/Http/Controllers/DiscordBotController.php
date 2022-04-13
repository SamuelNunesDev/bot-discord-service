<?php

namespace App\Http\Controllers;

use App\Models\DiscordBot;
use App\Notifications\DiscordNotification;
use Exception;
use Illuminate\Http\Request;

class DiscordBotController extends Controller
{
    public function send(Request $request)
    {
        try {
            $notification = new DiscordBot();
            $notification->discord_channel = $request->channel_id;
            $notification->channel_id = $request->channel_id;
            $notification->message = $request->message;
            $notification->notify(new DiscordNotification($notification));
        } catch(Exception $e) {
            dd($e);
        }
    }
}
