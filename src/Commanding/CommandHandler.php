<?php

namespace Mylesdc\Chat\Commanding;

interface CommandHandler
{
    public function handle($command);
}
