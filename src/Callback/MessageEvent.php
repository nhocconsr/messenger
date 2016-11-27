<?php
namespace Kerox\Messenger\Callback;

use Kerox\Messenger\Model\Callback\Message;

class MessageEvent extends AbstractCallbackEvent
{

    /**
     * @var int
     */
    protected $timestamp;

    /**
     * @var \Kerox\Messenger\Model\Callback\Message
     */
    protected $message;

    /**
     * MessageEvent constructor.
     *
     * @param string $senderId
     * @param string $recipientId
     * @param int $timestamp
     * @param \Kerox\Messenger\Model\Callback\Message $message
     */
    public function __construct(string $senderId, string $recipientId, int $timestamp, Message $message)
    {
        parent::__construct($senderId, $recipientId);

        $this->timestamp = $timestamp;
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return \Kerox\Messenger\Model\Callback\Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }
}
