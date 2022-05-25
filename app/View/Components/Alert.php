<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    private $userMessage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->userMessage = $message;
    }

    public function test($date){
        return \Illuminate\Support\Carbon::parse($date)
            ->addCentury(3)
            ->toDateString();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert')->with([
            'userMessage' => 'asfasfafafs'
                                              ]);
    }
}
