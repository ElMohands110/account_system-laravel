@extends('layouts.app_layout')

@section('link1', 'Profile')
@section('title', 'Profile')

@section('content')
    <div class="row gutters modal-dialog-centered align-content-center">
        <div class="col-xl-8">
            <div class="card gradient-dark-grey">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-md-12 col-sm-12 col-12">
                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="input-group mb-3 control-dark">
                                        <span class="input-group-text">Name</span>
                                        <input type="text" name="name" class="form-control" placeholder="Name..." value="{{ auth()->user()->name }}">
                                    </div>

                                    <div class="input-group mb-3 control-dark">
                                        <span class="input-group-text">Username</span>
                                        <input type="text" name="username" class="form-control" placeholder="Username..." value="{{ auth()->user()->username }}">
                                    </div>

                                    <div class="input-group mb-3 control-dark">
                                        <span class="input-group-text">Password</span>
                                        <input type="text" name="password" class="form-control" placeholder="Password...">
                                    </div>

                                    <div class="form-group text-center custom-mt-form-group">
                                        <button class="btn btn-secondary" type="reset">Cancel</button>
                                        <button class="btn btn-primary mr-2" id="submit" type="submit">Edit Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
