@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('ministry.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All Ministries
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('ministry.update',$ministries->id) }}" method="post">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Name <b style="color: red;">*</b> </label>
                            <input type="text" class="form-control" name="name" value="{{$ministries->name}}"
                                    autofocus>
                            </div>
                            <div class="form-group">
                                <label for="">Address <b style="color: red;">*</b> </label>
                                <textarea class="form-control" name="address" id="" cols="30" rows="2" >{{$ministries->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">State</label>
                                <select name="location_id" class="form-control">
                                    <option selected="disabled">Select State</option>
                                    @foreach ($locations as $location)

                                    <option value="{{$location->id}}"
                                        {{$location->id==$ministries->location_id ? 'selected':''}}>
                                        {{$location->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('ministry.index') }}" class="btn btn-default">Cancel</a>

                    </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
</div>
</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
{{-- <section class="col-lg-5 connectedSortable"> --}}


{{-- </section> --}}
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection