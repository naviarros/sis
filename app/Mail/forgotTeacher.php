<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Teacher_Login;

class forgotTeacher extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $teacher_login;

    public function __construct(Teacher_Login $teacher_login)
    {
        //
        $this->teacher_login = $teacher_login;
    }

    public function build()
    {
        return $this->subject('Forgot Password')->view('email.teacherforgotemail')->with([
            'username' => $this->teacher_login->username,
            'password' => $this->teacher_login->password
        ]);
    }
}
