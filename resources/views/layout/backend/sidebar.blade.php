<aside class="main-sidebar"> 
  <!-- sidebar -->
  <div class="sidebar"> 
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="image text-center"><img src="{{asset('public/backend/dist/img/img1.jpg')}}" class="img-circle" alt="User Image"> </div>
      <div class="info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-envelope"></i></a> <a href="#"><i class="fa fa-gear"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
    </div>
    
    <!-- sidebar menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">ADMINISTRATOR</li>
      <li> <a href="{{URL::to('/admins')}}"> <i class="fa fa-dashboard (alias)"></i> <span>Tổng quan</span> <span class="pull-right-container"></span> </a>
      </li>
      <li> <a href="#"> <i class="fa fa-gears (alias)"></i> <span>Quản lý quyền hệ thống</span> <span class="pull-right-container"> </span> </a>
      </li>
      <li> <a href="#"> <i class="fa fa-users"></i> <span>Quản lý người dùng</span> <span class="pull-right-container"></span> </a>
        <ul class="treeview-menu">
          <li><a href="ui-cards.html" class="active"><i class="fa fa-angle-right"></i> Cards</a></li>
        </ul>
      </li>
      <li class="header">MODULE QUẢN LÝ</li>
      <li class="treeview"> <a href="#"> <i class="fa fa-indent"></i> <span>Quản lý layout</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          <li><a href="table-basic.html"><i class="fa fa-angle-right"></i>Trang giới thiệu</a></li>
          <li><a href="table-layout.html"><i class="fa fa-angle-right"></i>Trang liên hệ</a></li>
        </ul>
      </li>   
      <li> <a href="{{URL::to('/admin/blogs')}}"> <i class="fa fa-pencil-square-o"></i> <span>Quản lý bài viết</span> <span class="pull-right-container"></span> </a>
      </li>
      <li> <a href="{{URL::to('/admin/services')}}"> <i class="fa fa-th-large"></i> <span>Quản lý dịch vụ</span> <span class="pull-right-container"> </span> </a>
      </li>
      <li> <a href="#"> <i class="fa fa-building-o"></i> <span>Quản lý dự án</span> <span class="pull-right-container"></span> </a>
      </li>   
      
    </ul>
  </div>
  <!-- /.sidebar --> 
</aside>