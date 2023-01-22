<?php

interface CommunicationInterface 
{
    public function send(User $recipient, string $request_start, string $request_end, string $template): void;
}