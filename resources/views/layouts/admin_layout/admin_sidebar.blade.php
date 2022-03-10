<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">     
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      <!-- <img src="{{ asset('images/admin_images/icons8-settings-50.png') }}" class="brand-image img-circle elevation-2" alt="User Image" style="opacity: .8"> -->
      <span class="brand-text font-weight-bold">Video Editor App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar sideImage">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
        <div class="image">
          <img src="{{ asset('images/admin_images/avatar04.png') }}" class="img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <h4>
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </h4>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
              @if(Session::get('page')=="dashboard")
              <?php $active = "active";?>
              @else
              <?php $active = ""; ?>
              @endif
              <h4>
                <a href="{{ url('/home') }}" class="nav-link {{$active}}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  
                    Dashboard
                  
                </a>
              </h4>
          </li>
          <!--  -->
          <li class="nav-item has-treeview menu-open">
              @if(Session::get('page')=="subscription")
              <?php $active = "active";?>
              @else
              <?php $active = ""; ?>
              @endif
              <h4>
                <a href="{{ url('subscription') }}" class="nav-link {{$active}}">
                  <i class="nav-icon fas fa-hand-point-up"></i>
                  
                    Subscription Plan
                  
                </a>
              </h4>
          </li>
          <!--  -->
          <li class="nav-item has-treeview menu-open">
              @if(Session::get('page')=="videos")
              <?php $active = "active";?>
              @else
              <?php $active = ""; ?>
              @endif
              <h4>
                <a href="{{ url('video') }}" class="nav-link {{$active}}">
                  <i class="nav-icon fas fa-photo-video"></i>
                  
                    Videos
                  
                </a>
              </h4>
          </li>
          <!--  -->
          <li class="nav-item has-treeview menu-open">
              @if(Session::get('page')=="feedback")
              <?php $active = "active";?>
              @else
              <?php $active = ""; ?>
              @endif
              <h4>
                <a href="{{ url('feedback') }}" class="nav-link {{$active}}">
                  <i class="nav-icon fas fa-comment"></i>
                  
                  
                    Feedback
                  
                </a>
              </h4>
          </li>
            <!--  -->
          <li class="nav-item">
            @if(Session::get('page')=="settings")
            <?php $active = "active";?>
            @else
            <?php $active = ""; ?>
            @endif
            <h4><a href="{{ url('settings') }}" class="nav-link {{$active}}">
              <i class="nav-icon fas fa-cog"></i>
              
                Settings
              
            </a></h4>
          </li>
            <!--  -->
          <li class="nav-item">
            @if(Session::get('page')=="notification")
            <?php $active = "active";?>
            @else
            <?php $active = ""; ?>
            @endif
            <h4><a href="{{ url('notifications') }}" class="nav-link {{$active}}">
              <i class="nav-icon fas fa-bell"></i>
              
                Notifications
              
            </a></h4>
          </li>
            <!--  -->
          <li class="nav-item">
            @if(Session::get('page')=="settings")
            <?php $active = "active";?>
            @else
            <?php $active = ""; ?>
            @endif
            <h4>
              <a class="nav-link"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
          
                <i class=" nav-icon fas fa-sign-out-alt"></i>
                
                  Logout
                
              </a>
            </h4>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>