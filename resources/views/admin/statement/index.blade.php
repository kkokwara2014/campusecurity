@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Statement
        </button>
        <br><br>

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Complainant</th>
                                    <th>Gender</th>
                                    <th>Reg. Number</th>
                                    <th>Phone</th>
                                    <th>Incident Date</th>
                                    <th>Incident Time</th>
                                    <th>Case Type</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($statements as $statement)
                                <tr>
                                    <td>{{$statement->complainant}}</td>
                                    <td>{{$statement->gender}}</td>
                                    <td>{{$statement->regnumber}}</td>
                                    <td>{{$statement->phone}}</td>
                                    <td>{{$statement->dateofevent}}</td>
                                    <td>{{$statement->timeofevent}}</td>
                                    <td>{{$statement->casetype}}</td>
                                    
                                    <td><a href="{{ route('statement.show',$statement->id) }}"><span
                                        class="fa fa-eye fa-2x text-primary"></span></a></td>

                                    <td><a href="{{ route('statement.edit',$statement->id) }}"><span
                                                class="fa fa-edit fa-2x text-primary"></span></a></td>
                                    <td>
                                        <form id="delete-form-{{$statement->id}}" style="display: none"
                                            action="{{ route('statement.destroy',$statement->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$statement->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-trash fa-2x text-danger"></span>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Complainant</th>
                                    <th>Gender</th>
                                    <th>Reg. Number</th>
                                    <th>Phone</th>
                                    <th>Incident Date</th>
                                    <th>Incident Time</th>
                                    <th>Case Type</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>


        {{-- Data input modal area --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-lg">

                <form action="{{ route('statement.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span class="fa fa-file"></span> Add Statement</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name of Complainant <b style="color: red;">*</b> </label>
                                        <input type="text" class="form-control" name="complainant"
                                            placeholder="Name of Complainant" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gender <b style="color: red;">*</b> </label>
                                        <select class="form-control" name="gender">
                                            <option selected="disabled">Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">State of Origin</label>
                                        <select name="location_id" class="form-control">
                                            <option selected="disabled">Select State of Origin</option>
                                            @foreach ($locations as $location)
                                            <option value="{{$location->id}}">{{$location->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Reg. Number <b style="color: red;">*</b> </label>
                                        <input type="text" class="form-control" name="regnumber"
                                            placeholder="Reg. Number" maxlength="19" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone <b style="color: red;">*</b> </label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                            maxlength="11" autofocus>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Religion <b style="color: red;">*</b> </label>
                                        <select class="form-control" name="religion">
                                            <option selected="disabled">Select Religion</option>
                                            <option>Christianity</option>
                                            <option>Islam</option>
                                            <option>Hindu</option>
                                            <option>Others</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="name">Date of Incident</label>
                                        <input id="datepicker" type="text" class="form-control" name="dateofevent"
                                            placeholder="Date of Incident">
                                    </div>
                                    <div>
                                        <label for="name">Time of Incident</label>
                                        <input id="timepicker" type="time" class="form-control" name="timeofevent"
                                            placeholder="Time of Incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Case Type <b style="color: red;">*</b> </label>
                                        <select class="form-control" name="casetype">
                                            <option selected="disabled">Select Case Type</option>
                                            <option>Criminal</option>
                                            <option>Cultism</option>
                                            <option>Civil</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Entry <b style="color: red;">*</b> </label>
                                        <textarea class="form-control" name="entry" id="" cols="30" rows="2"
                                            placeholder="Make Entry"></textarea>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->

                </form>
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


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