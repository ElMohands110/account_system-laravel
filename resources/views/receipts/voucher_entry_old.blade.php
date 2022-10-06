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
                        <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">+</a>
                        @if(count($receipts) > 0)
                            <a class="btn btn-danger" href="{{ route('voucher_entry.clear') }}" target="_self" role="button">Clear For New Voucher</a>
                            <a class="btn btn-primary" href="{{ route('voucher_entry.print') }}" target="_blank" role="button">Print</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table v-middle text-center">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Account Code</th>
                                <th>Account Name</th>
                                <th>Debit</th>
                                <th>Credit</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($receipts as $receipt)
                                <tr>
                                    <td></td>
                                    <td>{{ $receipt->account_code }}</td>
                                    <td>{{ $receipt->account_name }}</td>
                                    <td>{{ $receipt->debit ?? '0.0' }}</td>
                                    <td>{{ $receipt->credit ?? '0.0' }}</td>
                                    <td>
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
                        <form action="{{ route('voucher_entry.store') }}" method="POST" id="myForm">
                            @csrf

                            <div class="col-md-12 col-sm-12 col-12 my_form_4">

                                <div class="input-group mb-3 control-dark">
                                    <select type="text" name="account_name" class="form-control" required>
                                        <option hidden value="">-- choose account --</option>
                                        @foreach($acs as $ac)
                                            <option value="{{ $ac->account_name }}">{{ $ac->account_code }}- {{ $ac->account_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <input type="text" name="debit" class="form-control" placeholder="Debit...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <input type="text" name="credit" class="form-control" placeholder="Credit...">
                                </div>

                                <div class="input-group mb-3 control-dark">
                                    <input type="text" name="description" class="form-control" placeholder="Write Description...">
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

{{--@section('script')--}}
{{--    <script>--}}
{{--        $(document).on('click', '#submit', function (e) {--}}
{{--            e.preventDefault();--}}
{{--            let items = [--}}
{{--                $("select[name='account_name']").val(),--}}
{{--                $("input[name='debit']").val(),--}}
{{--                $("input[name='credit']").val(),--}}
{{--                $("input[name='description']").val()--}}
{{--            ]--}}
{{--            // console.log(items)--}}
{{--            let formData = new FormData($('#myForm')[0]);--}}

{{--            let tr = document.createElement('tr')--}}
{{--            let td = '';--}}
{{--            let a = '';--}}


{{--            $.ajax({--}}
{{--                type: 'post',--}}
{{--                url: "{{ route('voucher_entry.store') }}",--}}
{{--                data: formData,--}}
{{--                processData: false,--}}
{{--                contentType: false,--}}
{{--                cache: false,--}}
{{--                success: function (data) {--}}
{{--                    if(data.status) {--}}
{{--                        $('#success-msg').show()--}}
{{--                    }--}}
{{--                    document.querySelector('tbody').append(tr)--}}
{{--                    td = document.createElement('td')--}}
{{--                    tr.append(td)--}}

{{--                    for(let i=0;i<items.length;i++) {--}}
{{--                        td = document.createElement('td')--}}
{{--                        td.append(`${items[i]}`)--}}
{{--                        tr.append(td)--}}
{{--                    }--}}

{{--                    td = document.createElement('td');--}}
{{--                    a = document.createElement('a');--}}
{{--                    a.classList.add('btn badge gradient-red min-90 btn-sm mb-1');--}}
{{--                    a.textContent = 'delete';--}}
{{--                    td.append(a);--}}
{{--                    tr.append(td);--}}

{{--                    $('#exampleModalToggle').modal('toggle');--}}

{{--                    $("input[name='account_code']").val('');--}}
{{--                    $("input[name='debit']").val('');--}}
{{--                    $("input[name='credit']").val('');--}}
{{--                    $("input[name='description']").val('');--}}

{{--                },--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}
{{--@endsection--}}
