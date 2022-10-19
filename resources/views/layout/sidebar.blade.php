<div id="nav" class="nav-container d-flex ">
      <div class="nav-content d-flex">



        <!-- User Menu Start -->
        <div class="user-container d-flex">
          <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('temp/img/user.png') }}" />
            <div class="name">{{ decrypt($user->name) }}</div>
          </a>
          <div class="dropdown-menu dropdown-menu-end user-menu wide">

            <div class="row mb-1 ms-0 me-0">

              <div class="col-6 ps-1 pe-1">
                <ul class="list-unstyled">
                  <li>
                    <a href="#">
                      <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                      <span class="align-middle">Profile</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 p-1 mb-3 pt-3">
                <div class="separator-light"></div>
              </div>
              <div class="col-6 pe-1 ps-1">
                <ul class="list-unstyled">

                  <li>
                    <a href="{{ route('logout') }}">
                      <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                      <span class="align-middle">Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- User Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
          <ul id="menu" class="menu">
            @role('admin')
            <li>
              <a href="{{ route('dashboard') }}">
                <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                <span class="label">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="{{ route('positions') }}">
                <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                <span class="label">Positions</span>
              </a>
            </li>
            <li>
              <a href="{{ route('contestants') }}" data-href="/Pages">
                <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                <span class="label">Contestants</span>
              </a>
            </li>
            <li>
              <a href="{{ route('voters') }}" data-href="/Blocks">
                <i data-acorn-icon="grid-5" class="icon" data-acorn-size="18"></i>
                <span class="label">Voters</span>
              </a>
            </li>
            <li class="mega">
              <a href="{{ route('vote') }}" data-href="/Interface">
                <i data-acorn-icon="pocket-knife" class="icon" data-acorn-size="18"></i>
                <span class="label">Vote</span>
              </a>
            </li>
            @endrole
            @role('voter')
            <li>
              <a href="{{ route('dashboard') }}">
                <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                <span class="label">Dashboard</span>
              </a>
            </li>
            <li class="mega">
              <a href="{{ route('vote') }}" data-href="/Interface">
                <i data-acorn-icon="pocket-knife" class="icon" data-acorn-size="18"></i>
                <span class="label">Vote</span>
              </a>
            </li>
            @endrole
          </ul>
        </div>
        <!-- Menu End -->

        <!-- Mobile Buttons Start -->
        <div class="mobile-buttons-container">
          <!-- Scrollspy Mobile Button Start -->
          <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
            <i data-acorn-icon="menu-dropdown"></i>
          </a>
          <!-- Scrollspy Mobile Button End -->

          <!-- Scrollspy Mobile Dropdown Start -->
          <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
          <!-- Scrollspy Mobile Dropdown End -->

          <!-- Menu Button Start -->
          <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-acorn-icon="menu"></i>
          </a>
          <!-- Menu Button End -->
        </div>
        <!-- Mobile Buttons End -->
      </div>
      <div class="nav-shadow"></div>
    </div>
