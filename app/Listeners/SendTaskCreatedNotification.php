<?php

namespace App\Listeners;

use App\Events\TaskCreated as EventTaskCreated;
use \App\Mail\TaskCreated as MailTaskCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendTaskCreatedNotification
{

    public function handle(EventTaskCreated $event)
    {
        $email = $event->task->owner->email;
        \Mail::to($email)->send(
            new MailTaskCreated($event->task)
        );
    }
}
