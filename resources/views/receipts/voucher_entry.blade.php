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
                    <div>
                        @if(count($receipts) > 0)
                            <a class="btn btn-primary" href="{{ route('voucher_entry.print') }}" target="_blank" role="button">Print</a>
                            <a class="btn btn-danger" href="{{ route('voucher_entry.clear') }}" target="_self" role="button">Clear For New Voucher</a>
                        @endif
                        <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Recording Voucher Entry</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table v-middle text-center">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Account Name</th>
                                <th>Account Code</th>
                                <th>Credit</th>
                                <th>Debit</th>
                                <th>Description</th>
                                <th>Control</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-td="num"></td>
                                    <td data-td="name"></td>
                                    <td data-td="code"></td>
                                    <td data-td="credit"></td>
                                    <td data-td="debit"></td>
                                    <td data-td="desc"></td>
                                    <td>
                                        <button class="btn btn-primary add_voucher">+</button>
                                    </td>
                                </tr>
                            @foreach($receipts as $receipt)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $receipt->account_code }}</td>
                                    <td>{{ $receipt->account_name }}</td>
                                    <td>{{ $receipt->credit }}</td>
                                    <td>{{ $receipt->debit }}</td>
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
                            @csrf
                            <div class="input-group mb-3 control-dark">
                                <span class="input-group-text">Account Name</span>
                                <select type="text" name="account_code" class="form-control" required>
                                    <option hidden value="">-- choose account --</option>
                                    @foreach($acs as $ac)
                                        <option value="{{ $ac->account_code }}">{{ $ac->account_code }}- {{ $ac->account_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 col-sm-12 col-12 my_form">

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Credit</span>
                                    <input type="text" name="credit" class="form-control" placeholder="Credit...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <span class="input-group-text">Debit</span>
                                    <input type="text" name="debit" class="form-control" placeholder="Debit...">
                                </div>

                            </div>

                            <div class="input-group mb-3 control-dark">
                                <span class="input-group-text">Description</span>
                                <textarea type="text" name="description" class="form-control" placeholder="Write Description..."></textarea>
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

    <script>
        let tds = document.querySelectorAll('td')
        let tr = document.createElement(tr)
        let addBtn = document.querySelectorAll('.add_voucher')
        tds.forEach((li) => {
            if (li.innerHTML === '') {
                if (li.dataset.td === 'name')
                    li.innerHTML = '<input type="text" name="account_name">'
                if (li.dataset.td === 'code')
                    li.innerHTML = '<input type="text" name="account_code">'
                if (li.dataset.td === 'desc')
                    li.innerHTML = '<input type="text" name="description">'
                if (li.dataset.td === 'debit')
                    li.innerHTML = '<input type="text" name="debit">'
                if (li.dataset.td === 'credit')
                    li.innerHTML = '<input type="text" name="credit">'
            }
        })
        addBtn.forEach((li) => {
            li.addEventListener('click', (e) => {
                document.querySelector('tbody').append(tr);
            })
        })

    </script>

@endsection
