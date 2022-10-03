@extends('layouts.app_layout')

@section('title', 'Sub Accounts')
@section('link1', 'Accounts')
@section('link2')
    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Sub Accounts</li>
@endsection

@section('content')

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Sub Accounts</div>
                    <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Add Account</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table v-middle text-center">
                            <thead>
                            <tr>
                                <th>Account Code</th>
                                <th>Account Name</th>
                                <th>Main Account</th>
                                <th>Mobile</th>
                                <th>Invoice Limit</th>
                                <th>Balance Limit</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($sub_acs as $sub)
                                <tr>
                                    <td>{{ $sub->account_code }}</td>
                                    <td>{{ $sub->account_name }}</td>
                                    <td>{{ $sub->main_account }}</td>
                                    <td>{{ $sub->mobile }}</td>
                                    <td>{{ $sub->invoice }}</td>
                                    <td>{{ $sub->balance }}</td>
                                    <td>
                                        <a class="btn badge gradient-green min-90 btn-sm mb-1" data-bs-toggle="modal" href="#editModelExample{{ $sub->id }}" role="button">
                                            edit
                                        </a>
                                        <a data-bs-toggle="modal" href="#delete_sub_account{{ $sub->id }}" class="btn badge gradient-red min-90 btn-sm mb-1">
                                            delete
                                        </a>
                                    </td>
                                </tr>

                                <div id="delete_sub_account{{ $sub->id }}" class="modal fade modal-dark" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content modal-md">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Account</h4>
                                            </div>
                                            <form action="{{ route('account.destroy', $sub->id) }}" method="POST" id="delfrm">
                                                @csrf
                                                <div class="modal-body">
                                                    <p>Are you sure want to delete {{ $sub->account_name }}'s account?</p><br>
                                                    <div class="m-t-20 text-end">
                                                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade modal-dark" id="editModelExample{{ $sub->id }}" aria-hidden="true" aria-labelledby="editModelExampleLabel{{ $sub->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModelExampleLabel{{ $sub->id }}">Add Main Account</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12 col-sm-12 col-12">
                                                    <form action="{{ route('account.update', $sub->id) }}" method="POST">
                                                        @csrf
                                                        <div class="col-md-12 col-sm-12 col-12 my_form">

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Main</span>
                                                                <select type="text" name="main_account" class="form-control" required>
                                                                    <option hidden value="">-- choose account --</option>
                                                                    @foreach($main_acs as $main)
                                                                        <option @if($sub->main_account == $main->account_name) selected @endif value="{{ $main->account_name }}">{{ $main->account_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Name</span>
                                                                <input type="text" name="account_name" class="form-control" placeholder="Account Name..." required value="{{ $sub->account_name }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Contact</span>
                                                                <input type="text" name="contact" class="form-control" placeholder="Contact..." value="{{ $sub->contact }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Address</span>
                                                                <input type="text" name="address" class="form-control" placeholder="Address..." value="{{ $sub->address }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Email</span>
                                                                <input type="text" name="email" class="form-control" placeholder="Email..." value="{{ $sub->email }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Website</span>
                                                                <input type="text" name="website" class="form-control" placeholder="Website..." value="{{ $sub->website }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Fax</span>
                                                                <input type="text" name="fax" class="form-control" placeholder="Fax No..." value="{{ $sub->fax }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Mobile</span>
                                                                <input type="text" name="phone" class="form-control" placeholder="Mobile No..." value="{{ $sub->phone }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Tel</span>
                                                                <input type="text" name="tel" class="form-control" placeholder="Tel No..." value="{{ $sub->tel }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Invoice</span>
                                                                <input type="text" name="invoice" class="form-control" placeholder="Invoice Limit..." value="{{ $sub->invoice }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Balance</span>
                                                                <input type="text" name="balance" class="form-control" placeholder="Balance Limit..." value="{{ $sub->balance }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group text-center custom-mt-form-group">
                                                            <button class="btn btn-secondary" type="reset">Cancel</button>
                                                            <button class="btn btn-primary mr-2" id="submit" type="submit">Edit Account</button>
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

                    <div class="paginate_links">
                        {{ $sub_acs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-dark" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Add Sub Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-12">
                        <form action="{{ route('account.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="type" value=2>
                            <div class="col-md-12 col-sm-12 col-12 my_form">
                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Code</span>
                                    <input type="text" name="account_code" class="form-control" placeholder="Account Code...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Main</span>
                                    <select type="text" name="main_account" class="form-control" required>
                                        <option hidden value="">-- choose account --</option>
                                        @foreach($main_acs as $main)
                                            <option value="{{ $main->account_name }}">{{ $main->account_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Name</span>
                                    <input type="text" name="account_name" class="form-control" placeholder="Account Name..." required>
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Contact</span>
                                    <input type="text" name="contact" class="form-control" placeholder="Contact...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Address</span>
                                    <input type="text" name="address" class="form-control" placeholder="Address...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Email</span>
                                    <input type="text" name="email" class="form-control" placeholder="Email...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Website</span>
                                    <input type="text" name="website" class="form-control" placeholder="Website...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Fax</span>
                                    <input type="text" name="fax" class="form-control" placeholder="Fax No...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Mobile</span>
                                    <input type="text" name="phone" class="form-control" placeholder="Mobile No...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Tel</span>
                                    <input type="text" name="tel" class="form-control" placeholder="Tel No...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Invoice</span>
                                    <input type="text" name="invoice" class="form-control" placeholder="Invoice Limit...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Balance</span>
                                    <input type="text" name="balance" class="form-control" placeholder="Balance Limit...">
                                </div>
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
