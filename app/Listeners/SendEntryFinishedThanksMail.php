<?php

namespace App\Listeners;

use App\Events\EntryFinished;
use App\Mail\EntryFinished as MailEntryFinished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEntryFinishedThanksMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EntryFinished  $event
     * @return void
     */
    public function handle(EntryFinished $event)
    {
        //
        $entry = $event->entry;
        
        Mail::to( $entry->email )->send(
            new MailEntryFinished($entry)
        );
    }
}
