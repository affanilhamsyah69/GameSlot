    
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <p style="font-size:35px"><b>txAdmin</b></p>
        </div>
      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Menu Selection</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="/adminhome">
            <span class="menu-icon">
            </span>
            <span style="color: white" class="menu-title">Main Page</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/user') }}">
            <span class="menu-icon">
            </span>
            <span style="color: white" class="menu-title">User Management</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/product') }}">
            <span class="menu-icon">
            </span>
            <span style="color: white" class="menu-title">Add Product</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/update') }}">
            <span class="menu-icon">
            </span>
            <span style="color: white" class="menu-title">View Product</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="/">
            <span class="menu-icon">
            </span>
            <span style="color: white" class="menu-title">Homepage</span>
          </a>
        </li>
      </ul>
    </nav>