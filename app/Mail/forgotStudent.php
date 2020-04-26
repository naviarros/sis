<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Stud_Login;

class forgotStudent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $std_login;

    public function __construct(Stud_Login $std_login)
    {
        //
        $this->std_login = $std_login;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Forgot Password')->view('email.studentForgot')->with([
            'username' => $this->std_login->username,
            'password' => $this->std_login->password
        ]);
    }
}
