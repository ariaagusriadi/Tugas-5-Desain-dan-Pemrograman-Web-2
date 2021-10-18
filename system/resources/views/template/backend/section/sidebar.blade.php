<?php 
 function check ($route){
   if (Route::current()->uri == $route) {
     return 'text-primary';
   }
 }
?>


<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <div class="info" style="padding: 30px">
        <a href="#" class="d-block">
          @if (Auth::check())
              {{ request()->user()->username }}
              @else
              silakan login
          @endif
        </a>
      </div>
     
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('admin/dashboard') }}">
              <i class="ni ni-tv-2 {{ check('admin/dashboard') }}  "></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/user') }}">
              <i class="ni  ni-bag-17 {{ check('admin/kategori') }}"></i>
              <span class="nav-link-text">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/produk') }}">
              <i class="ni  ni-shop {{ check('admin/produk') }}"></i>
              <span class="nav-link-text">Produk</span>
            </a>
          </li>

        </ul>

      </div>
    </div>
  </div>
</nav>