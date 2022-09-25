<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\ExchangeVoucherRegistration;
use Illuminate\Http\Request;

class ExchangeVoucherRegistrationController extends Controller
{
    public function index() {
        $receipts = ExchangeVoucherRegistration::paginate(10);
        $main_acs = Account::where('account_type', 1)->get();
        return view('receipts.exchange_voucher_registration', compact('receipts', 'main_acs'));
    }

    public function storeArrest (Request $request) {
        $account_name1 = Account::where('account_code', $request->from_account_code)->first();
        $account_name2 = Account::where('account_code', $request->to_account_code)->first();
        ExchangeVoucherRegistration::create([
            'account_name' => "$account_name1->account_name",
            'account_code' => $request->from_account_code,
            'description' => "$request->from_description",
            'credit' => $request->from_credit,
            'debit' => $request->from_debit,
            'to_account_name' => $account_name2->account_name,
            'to_account_code' => $request->to_account_code,
            'to_description' => $request->to_description,
            'to_credit' => $request->to_credit,
            'to_debit' => $request->to_debit,
        ]);

        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function destroyArrest ($id) {
        ExchangeVoucherRegistration::find($id)->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function updateArrest (Request $request, $id) {
        $account_name1 = Account::where('account_code', $request->from_account_code)->first();
        $account_name2 = Account::where('account_code', $request->to_account_code)->first();
        ExchangeVoucherRegistration::find($id)->update([
            'account_name' => "$account_name1->account_name",
            'account_code' => $request->from_account_code,
            'description' => "$request->from_description",
            'credit' => $request->from_credit,
            'debit' => $request->from_debit,
            'to_account_name' => $account_name2->account_name,
            'to_account_code' => $request->to_account_code,
            'to_description' => $request->to_description,
            'to_credit' => $request->to_credit,
            'to_debit' => $request->to_debit,
        ]);

        return redirect()->back()->with('success', 'Updated Successfully');
    }
}
