<?php

namespace Mylesdc\Chat\Models;

use Mylesdc\Chat\BaseModel;

class ConversationUser extends BaseModel
{
    protected $table = 'mc_conversation_user';

    /**
     * Conversation.
     *
     * @return Relationship
     */
    public function conversation()
    {
        return $this->belongsTo(Conversation::class, 'conversation_id');
    }
}
