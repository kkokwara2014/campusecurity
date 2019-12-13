@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('nurse.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All Nurses
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('nurse.update',$nurses->id) }}" method="post">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div>
                                <label for="name">Surname</label>
                                <input type="text" class="form-control" name="lastname" value="{{$nurses->lastname}}">
                            </div>
                            <div>
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" name="firstname" value="{{$nurses->firstname}}">
                            </div>
                            <div>
                                <label for="name">Othername(s)</label>
                                <input type="text" class="form-control" name="othername" value="{{$nurses->othername}}">
                            </div>
                            <div>
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$nurses->email}}">
                            </div>
                            <div>
                                <label for="name">Phone</label>
                                <input type="tel" class="form-control" name="phone" value="{{$nurses->phone}}"
                                    maxlength="11">
                            </div>
                            <div>
                                <label for="name">Password</label>
                                <input id="password" type="password" class="form-control" name="password"
                                placeholder="Password">


                            </div>

                            <div>
                                <label for="name">Repeat Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="Repeat Password">
                            </div>

                            <input type="hidden" name="role_id" value="2">
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('nurse.index') }}" class="btn btn-default">Cancel</a>

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