<?php

namespace Marcus\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Marcus\User;


class EnviarEmailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request, User $admin)
    {
        $this->formulario = $request->all();
        $this->admin  = $admin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            $dados_email = array(     'user' => $this->admin,
            'formulario' => $this->formulario);
        return $this->from($this->admin->email)->view('email.layout')->with(
       $dados_email

        );
                    }
}
