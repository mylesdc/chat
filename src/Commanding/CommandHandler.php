<?php

namespace MylesDC\Chat\Commanding;

interface CommandHandler
{
    public function handle($command);
}
