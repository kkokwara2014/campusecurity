@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Advert
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
                                    <th>Advert #</th>
                                    <th>Category</th>
                                    <th>From</th>
                                    <th>By</th>
                                    <th>Title</th>
                                    <th>Amount</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($adverts as $advert)
                                <tr>
                                    <td>{{$advert->advertnumber}}</td>
                                    <td>{{$advert->category->name}}</td>
                                    <td>{{$advert->ministry->name}}</td>
                                    <td>{{$advert->user->lastname}}</td>
                                    <td>{{$advert->title}}</td>
                                    <td>&#8358; {{$advert->proposedamount}}</td>
                                   
                                    <td><a href="{{ route('advert.edit',$advert->id) }}"><span
                                                class="fa fa-edit fa-2x text-primary"></span></a></td>
                                    <td>
                                        <form id="delete-form-{{$advert->id}}" style="display: none"
                                            action="{{ route('advert.destroy',$advert->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$advert->id}}').submit();
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
                                    <th>Advert #</th>
                                    <th>Category</th>
                                    <th>From</th>
                                    <th>By</th>
                                    <th>Title</th>
                                    <th>Amount</th>
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
            <div class="modal-dialog">

                <form action="{{ route('advert.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span class="fa fa-bullhorn"></span> Add Advert</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Advert #</label>
                                <input style="background-color: dodgerblue; color:floralwhite" type="text"
                                    class="form-control" name="advertnumber"
                                    value="{{'cont-'. rand(38563587, 98579899)}}" readonly>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="category_id" id="category_id">
                                    <option selected="disabled">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="ministry_id" id="ministry_id">
                                    <option selected="disabled">Select Ministry</option>
                                    @foreach ($ministries as $ministry)
                                    <option value="{{$ministry->id}}">
                                        {{$ministry->name}}
                                    </option>
                                    @endforeach

                                </select>
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <div class="form-group">
                                <label for="">Title <b style="color: red;">*</b> </label>
                                <input type="text" class="form-control" name="title" placeholder="Advert Title">
                            </div>
                            <div class="form-group">
                                <label for="">Description <b style="color: red;">*</b> </label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="2"
                                    placeholder="Advert Description"></textarea>

                            </div>

                            <div class="form-group">
                                <label for="">Proposed Amount <b style="color: red;">*</b> </label>
                                <input type="text" class="form-control" name="proposedamount" placeholder="Amount"
                                    maxlength="9">
                            </div>

                            <div class="form-group">
                                <label for="">Upload Contract Image <b style="color: red;">*</b> </label>
                                <input type="file" name="advertimage">
                            </div>

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