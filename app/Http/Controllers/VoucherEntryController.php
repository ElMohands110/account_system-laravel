<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\VoucherEntry;
use Doctrine\DBAL\Platforms\Keywords\DB2Keywords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoucherEntryController extends Controller
{
    public function index() {
        $receipts = VoucherEntry::all();
        $acs = Account::all();
        return view('receipts.voucher_entry_old', compact('receipts', 'acs'));
    }
    public function storeArrest (Request $request) {
        $account_code = Account::where('account_name', $request->account_name)->first();
        VoucherEntry::create([
            'account_name' => "$request->account_name",
            'account_code' => $account_code->account_code,
            'description' => "$request->description",
            'credit' => $request->credit,
            'debit' => $request->debit,
        ]);

        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function destroyArrest ($id) {
        VoucherEntry::find($id)->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function updateArrest (Request $request, $id) {
        $account_code = Account::where('account_name', $request->account_name)->first();
        VoucherEntry::find($id)->update([
            'account_name' => "$request->account_name",
            'account_code' => $account_code->account_code,
            'description' => "$request->description",
            'credit' => $request->credit,
            'debit' => $request->debit,
        ]);

        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function print() {
        $receipts = VoucherEntry::all();
        $acs = Account::all();
        return view('layouts.print_voucher_entry', compact('receipts', 'acs'));
    }

    public function clear() {
        DB::delete('DELETE FROM voucher_entry');
        return redirect()->back()->with('success', 'Cleared Successfully');
    }

}
