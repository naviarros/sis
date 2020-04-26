<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Students;
class newStudent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $student;

    public function __construct(Students $student)
    {
        $this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.studentEmail')->with([
            'username' => $this->student->std_login->username, 
            'password' => $this->student->std_login->password,
            'student_guardian' => $this->student->guardian->username,
            'student_guardian_pass' => $this->student->guardian->password
        ]);
    }
}
