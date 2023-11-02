<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $student;
    public $ccEmails;
    public $templateData;

    public function __construct($student, $ccEmails, $templateData)
    {
        $this->student = $student;
        $this->ccEmails = $ccEmails;
        $this->templateData = $templateData;
    }

    public function build()
    {
        return $this->markdown('emails.student.created')
            ->cc($this->ccEmails)
            ->with($this->templateData);
    }
}


