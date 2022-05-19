<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;


    private $userMessage;
    private $userId;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $userId)
    {
        $this->userMessage = $message;
        $this->userId = $userId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from(config('mail.from'))
            ->view('mails.test_mail' )
            ->with([
                'userMessage' => $this->userMessage,
                'userId' => $this->userId
                   ]);
           // ->attach('');
    }
}
