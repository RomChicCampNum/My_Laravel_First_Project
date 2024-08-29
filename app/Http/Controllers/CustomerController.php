<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show($id)
    {
        $customer = Customer::with('orders')->findOrFail($id);
        return view('customer.show', ['customer' => $customer]);
    }
}
