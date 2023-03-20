<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('transactions.created_at', 'DESC')
            ->join('customers', 'customers.customerID', '=', 'transactions.customer_id')
            ->get();

        return view('admin.transactions', compact('transactions'));
    }
}
