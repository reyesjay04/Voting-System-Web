@extends('layouts.app')

@section('content')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Voter</a></li>
                        <li class="breadcrumb-item active">Register Voter</li>
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
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Register Voter</h3>
                        </div>
                        <form action="/regvoters" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="voters_code">Voters User Code</label>
                                    <input type="text" name="voters_code" class="form-control" id="voters_code" placeholder="Enter Voters ID" required >
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
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Import Voters List</h3>
                        </div>
                        <form action="/import" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                @csrf
                                <input type="file" name="file" class="form-control">
                                <br>
                                <button class="btn btn-warning">Import User Data</button>
                                {{--                                <a class="btn btn-warning" href="/export">Export User Data</a>--}}
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="container mt-5">
                    <h2 class="mb-4">Laravel 7|8 Yajra Datatables Example</h2>
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                        <tr>
                            <th>Voters Code</th>
                            <th>Voters Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function () {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('voters.list') }}",
                columns: [

                    {data: 'voters_code', name: 'voters_code'},
                    {data: 'voters_name', name: 'voters_name'},

                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>
@endsection
