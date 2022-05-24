<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReporteNoti extends Mailable
{
    use Queueable, SerializesModels;

    public $camposComplete;
    public $usuarioLogeado;
    public $subject = 'Tu mensaje fue enviado';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($camposComplete,$usuarioLogeado)
    {
        $this->camposComplete=$camposComplete;
        $this->usuarioLogeado=$usuarioLogeado;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('userFb/emailReporte');
    }
}
