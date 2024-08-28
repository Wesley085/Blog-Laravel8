<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentPost extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public $user, public $post)
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
        return $this->from('wesleysantos103094@gmail.com')
        ->subject('Fizeram um comentário no seu post')
        ->markdown('emails.comment', [
            'url' => 'http://127.0.0.1:8000/post/'.$this->post->slug
        ]);
        // return $this->view('view.name');
    }
}
