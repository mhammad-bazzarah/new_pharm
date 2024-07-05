<?php

namespace App\Listeners;

use App\Events\InvoiceItemCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HandleInvoiceItemCreated
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(InvoiceItemCreated $event): void
    {
        $invoiceItem = $event->invoiceItem;
           $product = $invoiceItem->product;

           // 1. Check for available quantity
           if ($invoiceItem->quantity > $product->quantity) {
               throw new \Exception("Insufficient product quantity available.");
           }

           // 2. Update product quantity
           $product->quantity -= $invoiceItem->quantity;
           $product->save();

           // 3. Calculate line_total
           $invoiceItem->line_total = $product->price * $invoiceItem->quantity;
           $invoiceItem->save();

           // 4. Calculate unit_price
           $invoiceItem->unit_price = $product->price ;
           $invoiceItem->save();

           // 5. Update invoice total_amount
           $invoice = $invoiceItem->invoice;
           $invoice->total_amount += $invoiceItem->line_total;
           $invoice->save();
    }
}
