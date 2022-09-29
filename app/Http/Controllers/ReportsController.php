<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\DeedOfArrest;
use App\Models\ExchangeVoucherRegistration;
use App\Models\VoucherEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function getPosts() {
        return view('reports.carring_bonds_restrictions');
    }

    public function searchPosts(Request $request) {
        $date_from = $request->date_from;
        $date_to = $request->date_to;
        $posting = $request->posting;
        if ($request->type == 'all') {
            $results = [];
        }
        elseif ($request->type == 'سند صرف') {
            $results = [];
        }
        elseif ($request->type == 'سند قبض') {
            $results = [];
        }
        else {
            $results = [];
        }
        return view('reports.carring_bonds_restrictions', compact('results'));
    }

    public function getReports() {
        return view('reports.bonds_restrictions_report');
    }

    public function searchReports(Request $request) {
        $date_from = $request->date_from;
        $date_to = $request->date_to;
        $type = $request->type;
        if ($request->type == 'حسابات أساسية') {
            $results = Account::where('account_type', 1)->get();
        }
        elseif ($request->type == 'حسابات فرعية') {
            $results = Account::where('account_type', 2)->get();
        }
        elseif ($request->type == 'سند صرف') {
            $results = ExchangeVoucherRegistration::all();
        }
        elseif ($request->type == 'سند قبض') {
            $results = DeedOfArrest::all();
        }
        elseif ($request->type == 'سند قيد') {
            $results = VoucherEntry::all();
        }
        else {
            $results = [];
        }
        return view('reports.bonds_restrictions_report', compact('results', 'date_from', 'date_to', 'type'));
    }
}
