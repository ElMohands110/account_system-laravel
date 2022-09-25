@extends('layouts.app_layout')

@section('title', 'Main Accounts')
@section('link1', 'Accounts')
@section('link2')
    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Main Accounts</li>
@endsection

@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Main Accounts</div>
                    <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Add Account</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table v-middle text-center">
                            <thead>
                            <tr>
                                <th>Account Name</th>
                                <th>Account Code</th>
                                <th>Account Father</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($main_acs as $main)
                                <tr>
                                    <td>{{ $main->account_name }}</td>
                                    <td>{{ $main->account_code }}</td>
                                    <td>{{ $main->father_name }}</td>
                                    <td>
                                        <a class="btn badge gradient-green min-90 btn-sm mb-1" data-bs-toggle="modal" href="#editModelExample{{ $main->id }}" role="button">
                                            edit
                                        </a>
                                        <a data-bs-toggle="modal" href="#delete_main_account{{ $main->id }}" class="btn badge gradient-red min-90 btn-sm mb-1">
                                            delete
                                        </a>
                                    </td>
                                </tr>

                                <div id="delete_main_account{{ $main->id }}" class="modal fade modal-dark" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content modal-md">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Account</h4>
                                            </div>
                                            <form action="{{ route('account.destroy', $main->id) }}" method="POST" id="delfrm">
                                                @csrf
                                                <div class="modal-body">
                                                    <p>Are you sure want to delete {{ $main->account_name }}'s account?</p><br>
                                                    <div class="m-t-20 text-end">
                                                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade modal-dark" id="editModelExample{{ $main->id }}" aria-hidden="true" aria-labelledby="editModelExampleLabel{{ $main->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModelExampleLabel{{ $main->id }}">Edit Main Account</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12 col-sm-12 col-12">
                                                    <form action="{{ route('account.update', $main->id) }}" method="POST">
                                                        @csrf
{{--                                                        <input type="hidden" name="type" value=1>--}}
                                                        <div class="col-md-12 col-sm-12 col-12 my_form">
                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Code</span>
                                                                <input type="text" name="account_code" class="form-control" placeholder="Account Code..." value="{{ $main->account_code }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Name</span>
                                                                <input type="text" name="account_name" class="form-control" placeholder="Account Name..." value="{{ $main->account_name }}">
                                                            </div>

                                                            <div class="input-group mb-3 control-dark">
                                                                <span class="input-group-text">Father</span>
                                                                <select type="text" name="father_name" class="form-control" required>
                                                                    <option hidden value="">-- choose account --</option>
                                                                    @foreach($father_acs as $father)
                                                                        <option @if($main->father_name == $father->account_name) selected @endif value="{{ $father->account_name }}">{{ $father->account_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group text-center custom-mt-form-group">
                                                                <button class="btn btn-secondary" type="reset">Cancel</button>
                                                                <button class="btn btn-primary mr-2" id="submit" type="submit">Edit Account</button>
                                                            </div>
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
                        {{ $main_acs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-dark" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Add Main Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-12">
                        <form action="{{ route('account.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="type" value=1>
                            <div class="col-md-12 col-sm-12 col-12 my_form">
                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Code</span>
                                    <input type="text" name="account_code" class="form-control" placeholder="Account Code...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Father</span>
                                    <select type="text" name="father_name" class="form-control" required>
                                        <option hidden value="">-- choose account --</option>
                                        @foreach($father_acs as $father)
                                            <option value="{{ $father->account_name }}">{{ $father->account_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Name</span>
                                    <input type="text" name="account_name" class="form-control" placeholder="Account Name...">
                                </div>

                                <div class="form-group text-center custom-mt-form-group">
                                    <button class="btn btn-secondary" type="reset">Cancel</button>
                                    <button class="btn btn-primary mr-2" id="submit" type="submit">Add Account</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
