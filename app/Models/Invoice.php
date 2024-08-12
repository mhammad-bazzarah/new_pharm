<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['payment_status','customer_id','total_amount','invoice_type'];
    public function Items(){
        return $this->hasMany(InvoiceItem::class);
    }
}
