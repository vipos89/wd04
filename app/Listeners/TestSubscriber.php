<?php


    namespace App\Listeners;

    use App\Events\MilosEvent;
    use App\Events\TestEvent;
    use Illuminate\Auth\Events\Login;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Support\Facades\Event;

    class TestSubscriber
    {
        public function handleTestEvent($event){

        }
        public function handleOloloEvent($event){

        }

        public function handleRegisterEvent($event){

        }

        /**
         * Зарегистрировать слушателей для подписчика.
         *
         * @param  \Illuminate\Events\Dispatcher  $events
         *
         */
        public function subscribe($events){


//            return [
//                TestEvent::class =>'handleTestEvent',
//                Registered::class =>  'handleRegisterEvent',
//                Login::class => 'handleOloloEvent',
//            ];

            $events->listen(
                TestEvent::class,
                [self::class, 'handleTestEvent']
            );
            $events->listen(
                Registered::class,
                [self::class, 'handleRegisterEvent']
            );
            $events->listen(
                MilosEvent::class,
                [self::class, 'handleRegisterEvent']
            );
        }

    }