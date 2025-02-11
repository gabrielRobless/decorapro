<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoDePrueba extends Mailable
{
    use Queueable, SerializesModels;

    public $contenido;

    public function __construct($contenido)
    {
        $this->contenido = $contenido;
    }

    public function build()
    {
        return $this->subject('Correo de prueba desde Laravel')
                    ->view('emails.prueba');
    }
}

