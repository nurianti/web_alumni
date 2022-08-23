<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        @can('user')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>ALUMNI</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" href="/admin">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/alumni') ? 'active' : '' }}" href="/alumni">
              <span data-feather="users" class="align-text-bottom"></span>
              Data Alumni
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/tracerstudy') ? 'active' : '' }}" href="">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Tracer Study
            </a>
          </li>
        </ul>
        @endcan

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Administrator</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" href="/admin">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/alumni') ? 'active' : '' }}" href="/admin/alumni">
              <span data-feather="users" class="align-text-bottom"></span>
              Data Alumni
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/tracerstudy') ? 'active' : '' }}" href="/admin/tracerstudy">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Tracer Study
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/posts') ? 'active' : '' }}" href="/admin/posts">
              <span data-feather="book" class="align-text-bottom"></span>
              My Posts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/fakultas') ? 'active' : '' }}" href="/admin/fakultas">
              <span data-feather="clipboard" class="align-text-bottom"></span>
              Jurusan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
        </ul>
        @endcan
      </div>
    </nav>