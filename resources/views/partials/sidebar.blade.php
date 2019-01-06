<div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }} nav-link" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="{{ Request::segment(1) === 'contacts' ? 'active' : null }} nav-link" href="/contacts">
                    <span data-feather="users"></span>
                    Contacts
                  </a>
                </li>
                <li class="nav-item">
                  <a class="{{ Request::segment(1) === 'companies' ? 'active' : null }} nav-link" href="/companies">
                    <span data-feather="briefcase"></span>
                    Companies
                  </a>
                </li>
                <li class="nav-item">
                  <a class="{{ Request::segment(1) === 'projects' ? 'active' : null }} nav-link" href="/projects">
                    <span data-feather="file"></span>
                    Projects
                  </a>
                </li>
                <li class="nav-item">
                  <a class="{{ Request::segment(1) === 'tasks' ? 'active' : null }} nav-link" href="/tasks">
                    <span data-feather="calendar"></span>
                    Tasks
                  </a>
                </li>
                <li class="nav-item">
                        <a class="{{ Request::segment(1) === 'deals' ? 'active' : null }} nav-link" href="/deals">
                          <span data-feather="compass"></span>
                          Deals
                        </a>
                      </li>
              </ul>

              {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="d-flex align-items-center text-muted" href="#">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                  </a>
                </li>
              </ul> --}}
            </div>
          </nav>
