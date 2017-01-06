<?php

namespace Astrotomic\Notifynder\Senders\Messages;

class SmsMessage
{
    protected $originator;
    protected $recipient;
    protected $body;

    public function from($originator)
    {
        $this->setOriginator($originator);
    }

    public function to($recipient)
    {
        $this->setRecipient($recipient);
    }

    public function text($body)
    {
        $this->setBody($body);
    }

    public function setOriginator($originator)
    {
        $this->originator = $originator;
    }

    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getOriginator()
    {
        return $this->originator;
    }

    public function getRecipient()
    {
        return $this->recipient;
    }

    public function getBody()
    {
        return $this->body;
    }
}
