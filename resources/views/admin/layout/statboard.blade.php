@include('admin.layout.statboardcontainer')
<!-- Small boxes (Stat box) -->
<section class="content">
  <div class="row">
    @if (Auth::user()->role->id==1||Auth::user()->role->id==2)
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
          <h3>5</h3>
  
            <p>Adverts</p>
          </div>
          <div class="icon">
            <i class="fa fa-bullhorn"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue-active">
          <div class="inner">
          <h3>3</h3>
  
            <p>Contractors</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-fuchsia">
          <div class="inner">
          <h3>3</h3>
  
            <p>Biddings</p>
          </div>
          <div class="icon">
            <i class="fa fa-coins"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon-active">
          <div class="inner">
          <h3>1</h3>
  
            <p>Admins</p>
          </div>
          <div class="icon">
            <i class="fa fa-user-plus"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    @endif
  </div>
</section>
<!-- /.row -->