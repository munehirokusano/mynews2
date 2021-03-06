<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SampleNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $text)
    {
        // $name = 'テスト';
        // $text = 'テストです。';
        $this->title = sprintf('%s様よりお問い合わせがありました', $name);
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            // ->view('emails.contact.html')
                    ->text('emails.contact.plain')
                    // ->text('emails.sample_notification_plain')
                    ->subject($this->title)
                    ->with([
                        'text' => $this->text,
                    ]);
    }
}
