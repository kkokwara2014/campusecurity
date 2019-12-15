@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Department
        </button>
        <br><br> --}}

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Reported By</th>
                                    <th>Title</th>
                                    <th>Crime Scene</th>
                                    <th>Message</th>
                                    
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reportthreats as $reportthreat)
                                <tr>
                                    <td>{{$reportthreat->user->lastname.', '.$reportthreat->user->firstname}}</td>
                                    <td>{{$reportthreat->title}}</td>
                                    <td>{{$reportthreat->crimescene}}</td>
                                    <td>{{$reportthreat->reportbody}}</td>

                                   
                                    <td>
                                        <form id="delete-form-{{$reportthreat->id}}" style="display: none"
                                            action="{{ route('reportthreat.destroy',$reportthreat->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$reportthreat->id}}').submit();
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
                                    <th>Reported By</th>
                                    <th>Title</th>
                                    <th>Crime Scene</th>
                                    <th>Message</th>
                                    
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