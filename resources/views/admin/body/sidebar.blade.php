<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar">	
  
      <div class="user-profile">
    <div class="ulogo">
       <a href="index.html">
        <!-- logo for regular state and mobile devices -->
         <div class="d-flex align-items-center justify-content-center">					 	
            <img src="{{ asset('frontend\img\LTTS_Logo.png') }}" class = "img-responsive rounded" alt="ltts logo" height="45" width="45" > 
            <h3><b>Local Train Ticket System</b></h3>
         </div>
      </a>
    </div>
      </div>
    
    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">  
    
  <li>
        <a href="{{route('dashboard')}}">
          <i data-feather="pie-chart"></i>
    <span>Dashboard</span>
        </a>
      </li> 
      <li class="treeview">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Manage User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('User.View')}}"><i class="ti-more"></i>View user</a></li>
          <li><a href="{{route('User.add')}}"><i class="ti-more"></i>Add User</a></li>
          
        </ul>
        
      </li>
      
      <li class="treeview">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Manage Train</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('train.View')}}"><i class="ti-more"></i>View Train</a></li>
          <li><a href="{{route('train.add')}}"><i class="ti-more"></i>Add Train</a></li>
          
        </ul>

      </li>

      <li class="treeview">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Manage Station</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('station.View')}}"><i class="ti-more"></i>View Station</a></li>
          <li><a href="{{route('station.add')}}"><i class="ti-more"></i>Add Station</a></li>
          
        </ul>
        
      </li>
     
  
     
    
    
      
      <li class="header nav-small-cap">User Interface</li>
    
      <li class="treeview">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Components</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
          <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
          <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
          <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
          <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
          <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
          <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
          <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
        </ul>
      </li>
  
  
       
     
    
  <li>
        <a href="{{route('admin.logout')}}">
          <i data-feather="lock"></i>
    <span>Log Out</span>
        </a>
      </li> 
      
    </ul>
  </section>

<div class="sidebar-footer">
  <!-- item-->
  <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
  <!-- item-->
  <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
  <!-- item-->
  <a href="{{route('admin.logout')}}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
</div>
</aside>