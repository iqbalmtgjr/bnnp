<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Modelpendaftaran;

class NotifPendaftaranSkhpn extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email;

    public function __construct(Modelpendaftaran $email)
    {
        // $email = Modelpendaftaran::where('NIK', $request->NIK_E)->first();
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sites.pendaftaran')
                    // ->with(['Tanggal_datang' => $this->])
        ;
    }
}
