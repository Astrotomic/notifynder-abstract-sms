<?php
namespace Astrotomic\Notifynder\Senders\Messages;

class SmsMessage
{
    /**
     * The sender of the message.
     *
     * @var string
     */
    protected $originator;

    /**
     * The sender of the message.
     *
     * @var string
     */
    protected $recipient;

    /**
     * The recipient of the message.
     *
     * @var string
     */
    protected $body;

    public function from($originator)
    {
        $this->originator = $originator;
    }

    public function to($recipient)
    {
        $this->recipient = $recipient;
    }

    public function text($body)
    {
        $this->body = $body;
    }
}