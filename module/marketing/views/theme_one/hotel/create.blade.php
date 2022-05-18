@extends($theme_path.'.layouts.master_layout')

@section('content')
    <form action="">
    <div class="row">
            <div class="col-md-12">

                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control is-valid" disabled value="test" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control is-invalid" value="test" id="username" placeholder="Enter email">
                                <span id="exampleInputPassword1-error" class="error invalid-feedback">Please provide a password</span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </div>
    </div>
    </form>
    @endsection

@push('js')
    <link rel="stylesheet" href="{{ callAdminStaticResources("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{ callAdminStaticResources("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{ callAdminStaticResources("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">

    <script src="{{ callAdminStaticResources("plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ callAdminStaticResources("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ callAdminStaticResources("plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ callAdminStaticResources("plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
    <script src="{{ callAdminStaticResources("plugins/datatables-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ callAdminStaticResources("plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}"></script>
    <script src="{{ callAdminStaticResources("plugins/datatables-buttons/js/buttons.html5.min.js") }}"></script>
    <script src="{{ callAdminStaticResources("plugins/datatables-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ callAdminStaticResources("plugins/datatables-buttons/js/buttons.colVis.min.js") }}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        $("#username").focus();
        $('.form-control').keypress(function(){
            $(this).attr('class','form-control');
        });
    </script>
    @endpush