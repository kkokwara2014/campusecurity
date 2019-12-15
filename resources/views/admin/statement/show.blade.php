@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Statement Details
            <small>Statement Information</small>
        </h1>
        {{-- <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Dashboard</li>
            </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <div>
                    <a href="{{ route('statement.index') }}" class="btn btn-primary btn-sm">
                        Back</a>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">


                                        <p>
                                            <h3>Complainant : {{$statement->complainant}}</h3>
                                        </p>
                                        <hr>
                                        <div>Staff Number : {{$statement->regnumber}} </div>
                                        <div>Gender : {{$statement->gender}}</div>
                                        <div>Email : {{$statement->email}} </div>
                                        <div>Phone : {{$statement->phone}}</div>
                                        <div>State of Origin : {{$statement->location->name}}</div>
                                        <div>Religion : {{$statement->religion}}</div>
                                        <div>Date of Incident : {{$statement->dateofevent}}</div>
                                        <div>Time of Incident : {{$statement->timeofevent}}</div>
                                        <div>Case Type : {{$statement->casetype}}</div>
                                        <div>Registered By : {{$statement->user->lastname.', '.$statement->user->firstname}}</div>
                                        <div style="text-align: justify;">Entry : {{$statement->entry}}</div>
                                        
                                        <hr>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    {{-- <div class="col-md-8">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <h3>Courses Taught</h3>
                                    <ul class="list-group">
                                        @forelse ($lecturercourses as $lectcourse)
                                        <li class="list-group-item">

                                            {{$lectcourse['title'].' - '.$lectcourse['code']}}

                    </li>
                    @empty
                    <p style="background-color: crimson;" class="badge badge-info"><strong>No
                            Course assigned yet!</strong></p>
                    @endforelse
                    </ul>

                </div>
        </div>

</div>
</div>
<!-- /.box-body -->
</div> --}}
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