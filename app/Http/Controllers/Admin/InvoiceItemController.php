<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use Error;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InvoiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productsIds = Product::all()->pluck('id');
        $product = $request->product_id;
         $request->validate([
            'product_id' => ['required','numeric',Rule::in($productsIds) ],
            'quantity' => [ 'required','numeric' ],
         ]);

         $product = Product::findOrFail($request->product_id);
         $item = new InvoiceItem();
         $item->invoice_id = $request->invoice_id;
         $item->product_id = $request->product_id;
         $item->quantity =  $request->quantity;
         $item->unit_price = $product->price;
         $item->line_total = $product->price * $item->quantity;
         $item->save();
         toastr()->success('New Item added to the invoice','success');
         return redirect()->route('admin.invoice.show',$item->invoice_id);



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function newItem($id){
        $invoice_id = $id;
        return view('admin.invoices.create_item',compact('invoice_id'));

    }
}
