<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.invoice');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customers = User::all()->pluck('id');
        $request->validate([
            'customer_id' => ['numeric' , Rule::in($customers) ]
        ]);
        $type = $request->inv_type;
        $invoice = new Invoice();
        $invoice->customer_id = $request->customer_id;
        $invoice->total_amount = 0;
        $invoice->payment_status = 'pending';
        $invoice->invoice_type = $type;
        $invoice->save();
        if($type == 'incoming'){
            toastr()->success('New Incoming Invoice Created ','success');
            return redirect()->route('admin.pending');
        }
        else{
            toastr()->success('New Outgoing Invoice Created ','success');
            return redirect()->route('admin.pendingOutgoing');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $invoice = Invoice::findOrFail($id);
        $customer = User::findOrFail($invoice->customer_id);
        $items = InvoiceItem::where('invoice_id',$id)->get();
        return view('admin.invoices.show',compact('invoice','customer','items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $invoice = Invoice::findOrFail($id);
        $customer = User::findOrFail($invoice->customer_id);
        return view('admin.invoices.edit',compact('invoice','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $invoice = Invoice::findOrFail($id);
        $invoice->update(['payment_status' => 'paid']);
        $invoice->save;
        toastr()->success('payment status updated successfully','paid');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function paid()
    {
        $invoices =  Invoice::where('invoice_type', 'incoming')->where('payment_status', 'paid')->get();
        $pageName = " Incoming Paid ";
        return view('admin.invoices.index', compact('invoices', 'pageName'));
    }
    public function pending()
    {
        $invoices =  Invoice::where('invoice_type', 'incoming')->where('payment_status', 'pending')->get();
        $pageName = " Incoming Pending ";
        return view('admin.invoices.index', compact('invoices','pageName'));
    }
    public function paidOutging()
    {
        $invoices =  Invoice::where('invoice_type', 'outgoing')->where('payment_status', 'pending')->get();
        $pageName = " Outgoing Paid ";
        return view('admin.invoices.index', compact('invoices','pageName'));
    }
    public function pendingOutgoing()
    {
        $invoices =  Invoice::where('invoice_type', 'outgoing')->where('payment_status', 'pending')->get();
        $pageName = " Outgoing Pending ";
        return view('admin.invoices.index', compact('invoices','pageName'));
    }
}
