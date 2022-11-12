<?php

namespace App\Mail;

use App\Models\UserProgram;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class InscriptionMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Inscripción exitosa.'; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->user_id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
     

        $userId = $this->user_id;

        $program = UserProgram::where('user_id' , $userId)
                    ->where('postulation_state' , 'Aceptada')
                    ->latest()->first();

        $programId = $program->id;

        return $this->view('mails.inscription' , compact('userId' , 'programId'));
    }
}
