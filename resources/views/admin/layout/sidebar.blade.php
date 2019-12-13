<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('user_images',$user->userimage)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->lastname.' '.Auth::user()->firstname}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li>

        <a href="{{route('dashboard.index')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            {{-- <i class="fa fa-angle-left pull-right"></i> --}}
          </span>
        </a>

      </li>

      {{-- <li><a href="{{route('user.profile')}}"><i class="fa fa-picture-o"></i> Upload Profile Photo</a></li> --}}
      {{-- <li><a href="{{route('comment.index')}}"><i class="fa fa-comment-o"></i> Comments</a></li> --}}


      {{-- @if (Auth::user()->role->id==1||Auth::user()->role->id==3) --}}

      <li><a href="{{route('category.index')}}"><i class="fa fa-th"></i> Category</a></li>
      <li><a href="{{route('advert.index')}}"><i class="fa fa-bullhorn"></i> Adverts</a></li>
      <li><a href="{{route('ministry.index')}}"><i class="fa fa-building-o"></i> Ministry</a></li>
      <li><a href="{{route('bidding.index')}}"><i class="fa fa-tags"></i> Biddings</a></li>

      {{-- <li class="treeview">
        <a href="#">
          <i class="fa fa-cubes"></i>
          <span>Contracts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('dashboard/bidding/contract/awarded')}}"><i class="fa fa-circle-o"></i> Awarded Contracts</a></li>
          <li><a href="{{url('dashboard/bidding/contract/unawarded')}}"><i class="fa fa-circle-o"></i> Unawarded Contracts</a></li>
          <li><a href="{{url('dashboard/bidding/contract')}}"><i class="fa fa-circle-o"></i> All Contracts</a></li>
          
        </ul>
      </li> --}}

      {{-- @endif --}}




      <li>
        <form id="logout-user" style="display: none" action="{{ route('user.logout') }}" method="post">
          {{ csrf_field() }}
        </form>
        <a href="" onclick="
        if (confirm('Are you sure you want to logout?')) {
            event.preventDefault();
        document.getElementById('logout-user').submit();
        } else {
            event.preventDefault();
        }">
          <i class="fa fa-sign-out"></i> Logout
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>