<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Depo System</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ URL::to('vendor/stisla-dashboard/img/products/product-3-50.png') }}" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ URL::to('vendor/stisla-dashboard/img/products/product-2-50.png') }}" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ URL::to('vendor/stisla-dashboard/img/products/product-1-50.png') }}" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ URL::to('vendor/stisla-dashboard/img/avatar/avatar-1.png') }}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ URL::to('vendor/stisla-dashboard/img/avatar/avatar-2.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ URL::to('vendor/stisla-dashboard/img/avatar/avatar-3.png') }}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ URL::to('vendor/stisla-dashboard/img/avatar/avatar-4.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ URL::to('vendor/stisla-dashboard/img/avatar/avatar-5.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Lets clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ URL::to('vendor/stisla-dashboard/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">Depo System</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">DS</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Administration</li>
            
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Managemen User</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/administration/user/user-permission">User Permission</a></li>
                <li><a class="nav-link" href="/administration/user/group-permission">Group Permission</a></li>
              </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill"></i><span>Price</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/administration/price/customer">Customer Price</a></li>
                    <li><a class="nav-link" href="/administration/price/consignee">Consignee Price</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="/administration/seal-stock"><i class="fas fa-stamp"></i> <span>Seal Stock</span></a></li>
            <li><a class="nav-link" href="/administration/vessel"><i class="fas fa-ship"></i> <span>Vessel Register</span></a></li>
            <li><a class="nav-link" href="/administration/cont"><i class="fas fa-truck"></i> <span>Cont Register</span></a></li>
            <li><a class="nav-link" href="/administration/do-specialmsg"><i class="fas fa-envelope-square"></i> <span>DO Special Message</span></a></li>


            <li class="menu-header">Operation</li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Operation IN</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/operation/dp-in">DP In</a></li>
                <li><a class="nav-link" href="/operation/data-in">Data In</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Operation OUT</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/operation/input-do">Input DO</a></li>
                <li><a class="nav-link" href="/operation/data-out">Data Out</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cart-plus"></i> <span>Cashier</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="layout-default.html">Import</a></li>
                <li><a class="nav-link" href="layout-transparent.html">Export</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Cancellation</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Manifest</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-pencil-alt"></i> <span>Update Data</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="bootstrap-alert.html">DO</a></li>
                <li><a class="nav-link" href="bootstrap-badge.html">Client</a></li>
              </ul>
            </li>


            <li class="menu-header">Report</li>

            <li><a class="nav-link" href="credits.html"><i class="fas fa-chart-bar"></i> <span>Cashier Report</span></a></li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-chart-area"></i> <span>In/Out Report</span></a></li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-chart-line"></i> <span>Summary Report</span></a></li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-chart-pie"></i> <span>Seal Report</span></a></li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-chart-area"></i> <span>PTI Report</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
              @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> <a href="/">Depo System Apps</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/jquery.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/popper.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/tooltip.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/moment.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/chart.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <script src="{{ URL::to('vendor/stisla-dashboard/modules/jquery-ui/jquery-ui.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ URL::to('vendor/stisla-dashboard/js/page/index.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/js/page/components-table.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ URL::to('vendor/stisla-dashboard/js/scripts.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/js/custom.js') }}"></script>
</body>
</html>