@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-11 connectedSortable">
        {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Ministry
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
                                    <th>Bidder</th>
                                    <th>Contract</th>
                                    <th>Bid Amount</th>
                                    <th>Category</th>
                                    <th>Award</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($biddings as $bidding)
                                <tr>
                                    <td>{{$bidding->user->lastname.', '.$bidding->user->firstname}}</td>
                                    <td>{{$bidding->advert->title}}</td>
                                    <td>&#8358;{{number_format($bidding->bidamount,2)}}</td>
                                    <td>{{$bidding->advert->category->name}}</td>

                                    <td>
                                        @if ($bidding->isawarded==1)

                                        <form id="delete-form-{{$bidding->id}}" style="display: none"
                                            action="{{ route('bidding.deactivate',$bidding->id) }}" method="post">
                                            {{ csrf_field() }}

                                        </form>
                                        <a href="" onclick="
                                                                if (confirm('Are you sure you want to Unaward this?')) {
                                                                    event.preventDefault();
                                                                document.getElementById('delete-form-{{$bidding->id}}').submit();
                                                                } else {
                                                                    event.preventDefault();
                                                                }
                                                            " class="btn btn-danger btn-sm btn-block">Unaward
                                        </a>
                                        @else

                                        <form id="delete-form-{{$bidding->id}}" style="display: none"
                                            action="{{ route('bidding.activate',$bidding->id) }}" method="post">
                                            {{ csrf_field() }}

                                        </form>
                                        <a href="" onclick="
                                                                if (confirm('Are you sure you want to Award this?')) {
                                                                    event.preventDefault();
                                                                document.getElementById('delete-form-{{$bidding->id}}').submit();
                                                                } else {
                                                                    event.preventDefault();
                                                                }
                                                            " class="btn btn-success btn-sm btn-block">Award
                                        </a>

                                        @endif

                                    </td>
                                    <td>
                                        <form id="delete-form-{{$bidding->id}}" style="display: none"
                                            action="{{ route('bidding.destroy',$bidding->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$bidding->id}}').submit();
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
                                    <th>Bidder</th>
                                    <th>Contract</th>
                                    <th>Bid Amount</th>
                                    <th>Category</th>
                                    <th>Award</th>
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