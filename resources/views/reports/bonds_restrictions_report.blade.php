@extends('layouts.app_layout')

@section('title', 'Bonds and Restrictions Report')
@section('link1', 'Reports')
@section('link2')
    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Bonds and Restrictions Report</li>
@endsection

@section('content')
    <style>
        .my_search {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
    </style>
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Bonds and Restrictions Report</div>
                </div>
                <br>
                <form action="{{ route('reports.search') }}" method="GET" class="container">
                    <div class="my_search">
                        <div class="search-container">
                            <div class="input-group m-0">
                                <input type="date" name="date_from" class="form-control">
                            </div>
                        </div>
                        <div class="search-container">
                            <div class="input-group m-0">
                                <input type="date" name="date_to" class="form-control">
                            </div>
                        </div>
                        <div class="search-container">
                            <div class="input-group m-0">
                                <select type="text" name="type" class="form-control" required>
                                    <option value="" hidden>-- choose type --</option>
                                    <option value="all">All</option>
                                    <option value="سند صرف">سند صرف</option>
                                    <option value="سند قبض">سند قبض</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark">Search</button>
                    </div>
                </form>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table v-middle text-center">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Debit</th>
                                <th>Credit</th>
                                <th>Account</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($results) && count($results) > 0)
                                @foreach($results as $item)

                                    <tr>
                                        <td>{{ $type }}</td>
                                        <td>{{ $date_from . '/' . $date_to }}</td>
                                        <td>{{ $item->debit }}</td>
{{--                                        <td>{{ $item->credit }}</td>--}}
{{--                                        <td>{{ $item->account_name }}</td>--}}
{{--                                        <td>{{ $item->description }}</td>--}}
                                    </tr>

                                @endforeach
                            @else
                                <td colspan="6">Empty</td>
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
