<?php

namespace MylesDC\Chat\Messages;

use MylesDC\Chat\Models\Conversation;

class SendMessageCommand
{
    public $senderId;
    public $body;
    public $conversation;

    /**
     * @param Conversation $conversation The conversation
     * @param string $body The message body
     * @param int $senderId The sender identifier
     * @param string $type The message type
     */
    public function __construct(Conversation $conversation, $body, $senderId, $type = 'text')
    {
        $this->conversation = $conversation;
        $this->body = $body;
        $this->type = $type;
        $this->senderId = $senderId;
    }
}
