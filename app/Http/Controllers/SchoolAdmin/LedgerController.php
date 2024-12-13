<?php

namespace App\Http\Controllers\SchoolAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ledger;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LedgerController extends Controller
{
    private function getOpeningBalance($accountId)
    {
        $account = Account::find($accountId);
        return [
            'amount' => $account->opening_balance,
            'type' => $account->balance_type
        ];
    }

    public function index(Request $request)
    {
        $accounts = Account::where('created_by', Auth::id())->orderBy('name')->get();
        $ledgerEntries = collect();
        $openingBalance = null;
    
        if ($request->filled('account_id')) {
            $openingBalance = $this->getOpeningBalance($request->account_id);

            $query = Transaction::query()
                ->select([
                    'transactions.transaction_date_nepali',
                    'transactions.voucher_no',
                    'transactions.description',
                    'voucher_types.name as voucher_type',
                    'transaction_details.debit',
                    'transaction_details.credit',
                ])
                ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id')
                ->join('voucher_types', 'transactions.voucher_type_id', '=', 'voucher_types.id')
                ->where('transaction_details.account_id', $request->account_id)
                ->where('transactions.is_opening_balance', '!=', 1)
                ->orderBy('transactions.transaction_date_nepali')
                ->orderBy('transactions.voucher_no');
    
            if ($request->filled('from_date') && !$request->filled('to_date')) {
                $query->where('transactions.transaction_date_nepali', '=', $request->from_date);
            } elseif (!$request->filled('from_date') && $request->filled('to_date')) {
                $query->where('transactions.transaction_date_nepali', '=', $request->to_date);
            } elseif ($request->filled('from_date') && $request->filled('to_date')) {
                $query->whereBetween('transactions.transaction_date_nepali', [
                    $request->from_date,
                    $request->to_date
                ]);
            }
    
            $ledgerEntries = $query->get();
        }
    
        return view('backend.school_admin.ledger.index', compact('accounts', 'ledgerEntries', 'openingBalance'));
    }
}