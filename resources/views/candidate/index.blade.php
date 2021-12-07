@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Candidate</a></li>
                        <li class="breadcrumb-item active">Register Candidate</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Register Voter</h3>
                        </div>
                        <form action="/regvoters" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="voters_code">Voters User Code(Auto generated)</label>
                                    <input type="text" name="voters_code" class="form-control" id="voters_code" placeholder="Enter Voters Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="voters_name">Voters Name</label>
                                    <input type="text" name="voters_name" class="form-control" id="voters_name" placeholder="Enter Voters Name" required>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>
{{--    <form action="/member/{{ $user->id }}" enctype="multipart/form-data" method="post">--}}
{{--        @csrf--}}
{{--        @method('PATCH')--}}

{{--        <div class="row">--}}
{{--            <div class="col-8 offset-2">--}}
{{--                <div class="row">--}}
{{--                    <h1>Register Voter</h1>--}}
{{--                </div>--}}
{{--                <div class="form-group row">--}}
{{--                    <label for="member" class="col-md-4 col-form-label">Member</label>--}}
{{--                    <input id="member"--}}
{{--                           type="membername"--}}
{{--                           class="form-control @error('member') is-invalid @enderror"--}}
{{--                           name="member"--}}
{{--                           autocomplete="member" autofocus>--}}
{{--                    @error('member')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="row pt-4">--}}
{{--                    <button class="btn-primary">Save Profile</button>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
@endsection
