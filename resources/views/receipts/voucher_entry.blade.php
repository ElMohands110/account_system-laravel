@extends('layouts.app_layout')

@section('title', __('message.voucher_entry'))
@section('link1', __('message.receipts'))
@section('link2')
    <li class="breadcrumb-item breadcrumb-active" aria-current="page">{{ __('message.voucher_entry') }}</li>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Voucher Entry</div>
                    <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Recording Voucher Entry</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table v-middle text-center">
                            <thead>
                            <tr>
                                <th>From Account Code</th>
                                <th>From Account Name</th>
                                <th>From Credit</th>
                                <th class="slice">From Debit</th>
                                <th>To Account Name</th>
                                <th>To Account Code</th>
                                <th>To Credit</th>
                                <th>To Debit</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($receipts as $receipt)
                                <tr>
                                    <td>{{ $receipt->account_code }}</td>
                                    <td>{{ $receipt->account_name }}</td>
                                    <td>{{ $receipt->credit }}</td>
                                    <td class="slice">{{ $receipt->debit }}</td>
                                    <td>{{ $receipt->to_account_code }}</td>
                                    <td>{{ $receipt->to_account_name }}</td>
                                    <td>{{ $receipt->to_credit }}</td>
                                    <td>{{ $receipt->to_debit }}</td>
                                    <td>
                                        <a class="btn badge gradient-green min-90 btn-sm mb-1" data-bs-toggle="modal" href="#editModelExample{{ $receipt->id }}" role="button">
                                            edit
                                        </a>
                                        <a data-bs-toggle="modal" href="#delete_receipt{{ $receipt->id }}" class="btn badge gradient-red min-90 btn-sm mb-1">
                                            delete
                                        </a>
                                    </td>
                                </tr>

                                <div id="delete_receipt{{ $receipt->id }}" class="modal fade modal-dark" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content modal-md">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Account</h4>
                                            </div>
                                            <form action="{{ route('voucher_entry.destroy', $receipt->id) }}" method="POST" id="delfrm">
                                                @csrf
                                                <div class="modal-body">
                                                    <p>Are you sure want to delete {{ $receipt->account_name }}'s account?</p><br>
                                                    <div class="m-t-20 text-end">
                                                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade modal-dark" id="editModelExample{{ $receipt->id }}" aria-hidden="true" aria-labelledby="editModelExampleLabel{{ $receipt->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModelExampleLabel{{ $receipt->id }}">Edit Voucher Entry</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12 col-sm-12 col-12">
                                                    <form action="{{ route('voucher_entry.update', $receipt->id) }}" method="POST">
                                                        @csrf

                                                        <h4>From</h4>
                                                        <div class="col-md-12 col-sm-12 col-12 my_form">
                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Account Name</span>
                                                                <select type="text" name="from_account_code" class="form-control" required>
                                                                    <option hidden value="">-- choose account --</option>
                                                                    @foreach($main_acs as $main)
                                                                        <option @if($receipt->account_code == $main->account_code) selected @endif value="{{ $main->account_code }}">{{ $loop->index + 1 }}- {{ $main->account_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Credit</span>
                                                                <input type="text" name="from_credit" class="form-control" placeholder="Credit..." value="{{ $receipt->credit }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Debit</span>
                                                                <input type="text" name="from_debit" class="form-control" placeholder="Debit..." value="{{ $receipt->debit }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea type="text" name="from_description" class="form-control" placeholder="Write Description...">{{ $receipt->descriptionto_ }}</textarea>
                                                            </div>

                                                        </div>

                                                        <hr>

                                                        <h4>To</h4>
                                                        <div class="col-md-12 col-sm-12 col-12 my_form">
                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Account Name</span>
                                                                <select type="text" name="to_account_code" class="form-control" required>
                                                                    <option hidden value="">-- choose account --</option>
                                                                    @foreach($main_acs as $main)
                                                                        <option @if($receipt->to_account_code == $main->account_code) selected @endif value="{{ $main->account_code }}">{{ $loop->index + 1 }}- {{ $main->account_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Credit</span>
                                                                <input type="text" name="to_credit" class="form-control" placeholder="Credit..." value="{{ $receipt->to_credit }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Debit</span>
                                                                <input type="text" name="to_debit" class="form-control" placeholder="Debit..." value="{{ $receipt->to_debit }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea type="text" name="to_description" class="form-control" placeholder="Write Description...">{{ $receipt->to_credit }}</textarea>
                                                            </div>

                                                        </div>

                                                        <div class="form-group text-center custom-mt-form-group">
                                                            <button class="btn btn-secondary" type="reset">Cancel</button>
                                                            <button class="btn btn-primary mr-2" id="submit" type="submit">Edit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-dark" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Recording Voucher Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-12">
                        <form action="{{ route('voucher_entry.store') }}" method="POST">
                            <input type="hidden" name="type" value=1>
                            @csrf
                            <h4>From</h4>
                            <div class="col-md-12 col-sm-12 col-12 my_form">
                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Account Name</span>
                                    <select type="text" name="from_account_code" class="form-control" required>
                                        <option hidden value="">-- choose account --</option>
                                        @foreach($main_acs as $main)
                                            <option value="{{ $main->account_code }}">{{ $loop->index + 1 }}- {{ $main->account_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Credit</span>
                                    <input type="text" name="from_credit" class="form-control" placeholder="Credit...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Debit</span>
                                    <input type="text" name="from_debit" class="form-control" placeholder="Debit...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Description</span>
                                    <textarea type="text" name="from_description" class="form-control" placeholder="Write Description..."></textarea>
                                </div>

                            </div>

                            <hr>

                            <h4>To</h4>
                            <div class="col-md-12 col-sm-12 col-12 my_form">
                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Account Name</span>
                                    <select type="text" name="to_account_code" class="form-control" required>
                                        <option hidden value="">-- choose account --</option>
                                        @foreach($main_acs as $main)
                                            <option value="{{ $main->account_code }}">{{ $loop->index + 1 }}- {{ $main->account_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Credit</span>
                                    <input type="text" name="to_credit" class="form-control" placeholder="Credit...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Debit</span>
                                    <input type="text" name="to_debit" class="form-control" placeholder="Debit...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Description</span>
                                    <textarea type="text" name="to_description" class="form-control" placeholder="Write Description..."></textarea>
                                </div>

                            </div>

                            <div class="form-group text-center custom-mt-form-group">
                                <button class="btn btn-secondary" type="reset">Cancel</button>
                                <button class="btn btn-primary mr-2" id="submit" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
