@extends('layouts.app_layout')

@section('title', 'Accounts Tree')
@section('link1', 'Accounts')
@section('link2')
    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Accounts Tree</li>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Accounts Tree</div>
                    <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Add Father</a>
                </div>
                <div class="card-body">
                    <div class="accordion light" id="accordionExample">

                    @foreach($father_acs as $father)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $father->id }}" aria-expanded="true" aria-controls="collapse{{ $father->id }}">[{{ $father->account_code }}] {{ $father->account_name }}</button>
                            </h2>
                            <div id="collapse{{ $father->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $father->id }}" data-bs-parent="#accordionExample{{ $father->id }}">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="accordion light" id="accordionExample{{ $father->id }}">

                                            @foreach($main_acs as $main)
                                                @if($main->father_name == $father->account_name)
                                                    <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $main->id }}" aria-expanded="true" aria-controls="collapse{{ $main->id }}">[{{ $main->account_code }}] {{ $main->account_name }}</button>
                                                    </h2>
                                                    <div id="collapse{{ $main->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $main->id }}" data-bs-parent="#accordionExample{{ $main->id }}">
                                                        <div class="accordion-body">
                                                            <div class="card-body">
                                                                <div class="accordion light" id="accordionExample{{ $main->id }}">
                                                                    <div class="table-responsive">
                                                                <table class="table v-middle text-center">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Account Code</th>
                                                                        <th>Account Name</th>
                                                                        <th>Mobile</th>
                                                                        <th>Invoice Limit</th>
                                                                        <th>Balance Limit</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($sub_acs as $sub)
                                                                        @if($sub->main_account == $main->account_name)
                                                                            <tr>
                                                                                <td>{{ $sub->account_code }}</td>
                                                                                <td>{{ $sub->account_name }}</td>
                                                                                <td>{{ $sub->mobile }}</td>
                                                                                <td>{{ $sub->invoice }}</td>
                                                                                <td>{{ $sub->balance }}</td>
                                                                            </tr>
                                                                        @else
                                                                            @continue
                                                                        @endif
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                    @continue
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-dark" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Add Father Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-12">
                        <form action="{{ route('account.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="type" value=0>
                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Name</span>
                                    <input type="text" name="account_name" class="form-control" placeholder="Account Name...">
                                </div>
                                <div class="form-group text-end custom-mt-form-group">
                                    <button class="btn btn-secondary" type="reset">Cancel</button>
                                    <button class="btn btn-primary mr-2" id="submit" type="submit">Add Account</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
