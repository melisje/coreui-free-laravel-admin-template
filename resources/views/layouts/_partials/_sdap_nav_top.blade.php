<nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
    <a class="navbar-brand d-none d-sm-block" href="{{ url('/') }}">@yield('page_title',env('APP_NAME') )</a>
    <button
        class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2"
        id="sidebarToggle"
        href="#">
        <i data-feather="menu"></i>
    </button>

    @section('searchbox')
        <form class="form-inline mr-autox d-none d-lg-block">
            <input id="page-search"
                   class="form-control form-control-solid mr-sm-2"
                   type="search"
                   placeholder="Search"
                   aria-label="Search"
            />
        </form>
    @show

    <ul class="navbar-nav">
        @yield('top-menu-left')
    </ul>

    <ul class="navbar-nav align-items-center ml-auto">
        @yield('top-menu-right')
        @section('documentation')
            <li class="nav-item dropdown no-caret mr-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-inline d-md-none font-weight-500">Docs</div>
                    <div class="d-none d-md-inline font-weight-500">Documentation</div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i
                    ></a>

                <div class="dropdown-menu dropdown-menu-right py-0 o-hidden mr-n15 mr-lg-0 animated--fade-in-up"
                     aria-labelledby="navbarDropdownDocs">
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro"
                       target="_blank"
                    >
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book"></i></div>
                        <div>
                            <div class="small text-gray-500">Documentation</div>
                            Usage instructions and reference
                        </div>
                    </a
                    >
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components"
                       target="_blank"
                    >
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="code"></i></div>
                        <div>
                            <div class="small text-gray-500">Components</div>
                            Code snippets and reference
                        </div>
                    </a
                    >
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog"
                       target="_blank"
                    >
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="file-text"></i>
                        </div>
                        <div>
                            <div class="small text-gray-500">Changelog</div>
                            Updates and changes
                        </div>
                    </a
                    >
                </div>
            </li>
        @show
        @section('notifications')
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                   href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                     aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2"
                                                                                 data-feather="bell"></i>Alerts
                                                                                                         Center</h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!"
                    >
                        <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i>
                        </div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 29, 2019</div>
                            <div class="dropdown-notifications-item-content-text">This is an alert message. It's
                                                                                  nothing serious, but it requires
                                                                                  your attention.
                            </div>
                        </div>
                    </a
                    ><a class="dropdown-item dropdown-notifications-item" href="#!"
                    >
                        <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 22, 2019</div>
                            <div class="dropdown-notifications-item-content-text">A new monthly report is ready.
                                                                                  Click here to view!
                            </div>
                        </div>
                    </a
                    ><a class="dropdown-item dropdown-notifications-item" href="#!"
                    >
                        <div class="dropdown-notifications-item-icon bg-danger"><i
                                class="fas fa-exclamation-triangle"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 8, 2019</div>
                            <div class="dropdown-notifications-item-content-text">Critical system failure, systems
                                                                                  shutting down.
                            </div>
                        </div>
                    </a
                    ><a class="dropdown-item dropdown-notifications-item" href="#!"
                    >
                        <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i>
                        </div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 2, 2019</div>
                            <div class="dropdown-notifications-item-content-text">New user request. Woody has
                                                                                  requested access to the
                                                                                  organization.
                            </div>
                        </div>
                    </a
                    ><a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>
        @show
        @section('messagecenter')
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                   href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false"><i data-feather="mail"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                     aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2"
                                                                                 data-feather="mail"></i>Message
                                                                                                         Center</h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!"
                    ><img class="dropdown-notifications-item-img"
                          src="https://source.unsplash.com/vTL_qy03D1I/60x60"/>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                                                                  consectetur adipisicing elit, sed
                                                                                  do eiusmod tempor incididunt ut
                                                                                  labore et dolore magna aliqua. Ut
                                                                                  enim ad minim veniam, quis nostrud
                                                                                  exercitation ullamco laboris nisi
                                                                                  ut aliquip ex ea commodo
                                                                                  consequat. Duis aute irure dolor
                                                                                  in reprehenderit in voluptate
                                                                                  velit esse cillum dolore eu fugiat
                                                                                  nulla pariatur. Excepteur sint
                                                                                  occaecat cupidatat non proident,
                                                                                  sunt in culpa qui officia deserunt
                                                                                  mollit anim id est laborum.
                            </div>
                            <div class="dropdown-notifications-item-content-details">Emily Fowler · 58m</div>
                        </div>
                    </a
                    ><a class="dropdown-item dropdown-notifications-item" href="#!"
                    ><img class="dropdown-notifications-item-img"
                          src="https://source.unsplash.com/4ytMf8MgJlY/60x60"/>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                                                                  consectetur adipisicing elit, sed
                                                                                  do eiusmod tempor incididunt ut
                                                                                  labore et dolore magna aliqua. Ut
                                                                                  enim ad minim veniam, quis nostrud
                                                                                  exercitation ullamco laboris nisi
                                                                                  ut aliquip ex ea commodo
                                                                                  consequat. Duis aute irure dolor
                                                                                  in reprehenderit in voluptate
                                                                                  velit esse cillum dolore eu fugiat
                                                                                  nulla pariatur. Excepteur sint
                                                                                  occaecat cupidatat non proident,
                                                                                  sunt in culpa qui officia deserunt
                                                                                  mollit anim id est laborum.
                            </div>
                            <div class="dropdown-notifications-item-content-details">Diane Chambers · 2d</div>
                        </div>
                    </a
                    ><a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>
        @show
        @section('user')
            <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                   href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false"><img class="img-fluid"
                                              src="{{ auth()->user()->gravatar() }}"/></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                     aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="{{ auth()->user()->gravatar() }}"/>
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">{{ auth()->user()->name }}</div>
                            <div class="dropdown-user-details-email">{{ auth()->user()->email }}</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('home') }}">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Account</a>

                    <a class="dropdown-item" href="#logout"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div class="dropdown-item-icon">
                            <i data-feather="log-out"></i>
                        </div>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @show
    </ul>
</nav>
