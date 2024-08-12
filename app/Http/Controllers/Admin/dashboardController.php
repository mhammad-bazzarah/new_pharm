<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index (){
        $totalAdmins = User::where('is_admin',1)->count();
        $totalCustomers= User::where('is_admin',0)->count();
        $totalOffers = Offer::all()->count();
        $totalInvoices = Invoice::all()->count();
        return view('admin.index',compact(
            'totalAdmins',
            'totalCustomers' ,
            'totalOffers' ,
            'totalInvoices' ,
        ));
    }
}
