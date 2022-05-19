@extends($theme_path.'.layouts.master_layout')

@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5>Edit {{ $title }}</h5>
                            <div class="card-header-right">
                                <a href="{{ route($base_route.'index') }}" title="" class="btn btn-primary">{{ $title }} List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route($base_route.'update',$row->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf @method('put')
                                    @includeIf($view_path.'common.form')
                                    <div class="form-group">
                                        <button type="submit" name="save" value="save" title="" class="btn btn-primary">Save</button>
                                        <button type="submit" title="" class="btn btn-primary">Save & Continue</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

