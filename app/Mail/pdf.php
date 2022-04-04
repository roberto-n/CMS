<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class pdf extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->subject(subject:'pdf')
                     ->to(address:'',name:'')
                     ->view('mail.pdf')
                     ->attach("storage/private/pdf.pdf",[
                        'as' => 'pdf.pdf',
                        'mime' => 'application/pdf',
                    ]);
    
    }
}
