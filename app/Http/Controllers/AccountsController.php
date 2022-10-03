<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function mainAccount() {
        $father_acs = Account::where('account_type', 0)->get();
        $main_acs = Account::where('account_type', 1)->paginate(PAGINATE_SIZE);
        return view('accounts.main_account', compact('father_acs', 'main_acs'));
    }

    public function subAccount() {
        $main_acs = Account::where('account_type', 1)->get();
        $sub_acs = Account::where('account_type', 2)->paginate(PAGINATE_SIZE);
        return view('accounts.sub_account', compact('main_acs', 'sub_acs'));
    }

    public function treeAccount() {
        $father_acs = Account::where('account_type', 0)->get();
        $main_acs = Account::where('account_type', 1)->get();
        $sub_acs = Account::where('account_type', 2)->get();
        return view('accounts.tree_account', compact('father_acs', 'main_acs', 'sub_acs'));
    }

    public function storeAccount(Request $request) {
        $main = Account::where('account_type', 1)->where('father_name', "$request->father_name")->latest('account_code')->first();
        $sub = Account::where('account_type', 2)->where('main_account', "$request->main_account")->latest('account_code')->first();
        if ($request->type == 2) {
            $main_sub_account = Account::where('account_type', 1)->where('account_name', "$request->main_account")->first();
        }
        if ($request->type == 1) {
            $father_main_account = Account::where('account_type', 0)->where('account_name', "$request->father_name")->first();
        }

        Account::create([
            'account_name' => $request->account_name,
            'account_type' => $request->type,
            'account_code' => $request->type == 1 ? (count($main) > 0 ? ++$main->account_code : $father_main_account->account_code . 01) : (count($sub) > 0 ? ++$sub->account_code : $main_sub_account->account_code . 001),
            'email' => $request->email,
            'phone' => $request->phone,
            'tel' => $request->tel,
            'fax' => $request->fax,
            'address' => $request->address,
            'website' => $request->website,
            'invoice' => $request->invoice,
            'balance' => $request->balance,
            'father_name' => $request->father_name,
            'main_account' => $request->main_account,
        ]);
        return redirect()->back()->with('success', 'Account Created Successfully');
    }

    public function updateAccount(Request $request, $id) {
        Account::find($id)->update([
            'account_name' => $request->account_name,
            'account_code' => $request->account_code,
            'email' => $request->email,
            'phone' => $request->phone,
            'tel' => $request->tel,
            'fax' => $request->fax,
            'address' => $request->address,
            'website' => $request->website,
            'invoice' => $request->invoice,
            'balance' => $request->balance,
            'father_name' => $request->father_name,
            'main_account' => $request->main_account,
        ]);
        return redirect()->back()->with('success', 'Account Updated Successfully');
    }

    public function destroyAccount($id) {
        Account::find($id)->delete();
        return redirect()->back()->with('success', 'Account Deleted Successfully');
    }

}
