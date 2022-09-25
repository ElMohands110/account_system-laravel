<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\DeedOfArrest;
use Illuminate\Http\Request;

class DeedOfArrestController extends Controller
{
    public function index() {
        $receipts = DeedOfArrest::all();
        $main_acs = Account::where('account_type', 1)->get();
        return view('receipts.deed_of_arrest', compact('receipts', 'main_acs'));
    }

    public function storeArrest (Request $request) {
        $account_name1 = Account::where('account_code', $request->from_account_code)->first();
        $account_name2 = Account::where('account_code', $request->to_account_code)->first();
        DeedOfArrest::create([
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
        DeedOfArrest::find($id)->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function updateArrest (Request $request, $id) {
        $account_name1 = Account::where('account_code', $request->from_account_code)->first();
        $account_name2 = Account::where('account_code', $request->to_account_code)->first();
        DeedOfArrest::find($id)->update([
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
