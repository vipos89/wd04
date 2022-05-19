<?php

namespace App\Listeners;

use App\Events\TestEvent;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Test2EventListener
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
        // send to Telegram
        //5164800861:AAFsJTtwhzMiGoS-g6guLYQYXjQcr6pAh9g
        // https://api.telegram.org/bot{token}/sendMessage
        //chat_id @tms_test
        // text = hello world
        $url = "https://api.telegram.org/bot5164800861:AAFsJTtwhzMiGoS-g6guLYQYXjQcr6pAh9g/sendMessage";
        \Illuminate\Support\Facades\Http::get($url, [
            'chat_id'=> '@tms_test',
            'text' => 'hello world'
        ]);
    }
}
