<?php

namespace App\Providers;

use App\Events\MilosEvent;
use App\Events\TestEvent;
use App\Listeners\MilosListener;
use App\Listeners\MilosSubscriber;
use App\Listeners\Test2EventListener;
use App\Listeners\TestEventListener;
use App\Listeners\TestSubscriber;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            TestEventListener::class,
        ],
        TestEvent::class => [
            TestEventListener::class,
            Test2EventListener::class
        ]
    ];

//    protected $subscribe = [
//        TestSubscriber::class,
//        TestSubscriber::class,
//        TestSubscriber::class,
//
//    ];



    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
