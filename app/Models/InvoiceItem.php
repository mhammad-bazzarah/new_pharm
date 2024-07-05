<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;
    protected $table = "invoice_items";
    protected $fillable = ["invoice_id","product_id","quantity","unit_price","line_total"];
    public function Invoice(){
        return $this->belongsTo(Invoice::class);
    }
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function rules()
    {
        return [
            'quantity' => 'required|integer|min:1|max:' . $this->product->quantity, // Dynamically set max based on available quantity
        ];
    }
}
