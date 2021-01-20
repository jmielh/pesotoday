<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $voucher_link;
    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($voucher_link, Order $order)
    {
        $this->voucher_link = $voucher_link;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Se ha recibido un comprobante de pago!')->view('emails.paymentReceived')->attach($this->voucher_link);
    }
}
