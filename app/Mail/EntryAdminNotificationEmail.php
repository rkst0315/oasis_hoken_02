<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EntryAdminNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $entry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $entry )
    {
        //
        $this->entry = $entry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from(env('MAIL_FROM_ADDRESS'),'子育て応援キャンペーン事務局')
        ->subject('応募を受け付けました')
        ->text('emails.entry-admin-notification-mail');
    }
}
