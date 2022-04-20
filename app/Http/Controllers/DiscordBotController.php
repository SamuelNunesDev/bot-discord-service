<?php

namespace App\Http\Controllers;

use App\Models\DiscordBot;
use App\Notifications\DiscordNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DiscordBotController extends Controller
{
    public function send(Request $request)
    {
        try {
            $notification = new DiscordBot();
            $notification->discord_channel = $request->channel_id;
            $notification->channel_id = $request->channel_id;
            $notification->message = $request->message;
            $notification->embed = $request->embed;
            $notification->notify(new DiscordNotification($notification));

            return new Response('Notifications have been sent successfully!');
        } catch(Exception $e) {
            return new Response('There was an error trying to send notifications. '.$e->getMessage(), 500);
        }
    }
}
