@extends("layouts.admin.layout")

@section("css")

@endsection

@section("content")


    <div class="main-panel">
        <div class="main-header">
            <div class="main-header-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="{{route('admin.dashboard')}}" class="logo">
                        <img
                            src="{{asset('assets/img/kaiadmin/logo_light.svg')}}"
                            alt="navbar brand"
                            class="navbar-brand"
                            height="20"
                        />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <!-- Navbar Header -->
            <nav
                class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
            >
                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

                        <li class="nav-item topbar-user dropdown hidden-caret">
                            <a
                                class="dropdown-toggle profile-pic"
                                data-bs-toggle="dropdown"
                                href="#"
                                aria-expanded="false"
                            >
                                <div class="avatar-sm">
                                    <img
                                        src="assets/img/profile.jpg"
                                        alt="..."
                                        class="avatar-img rounded-circle"
                                    />
                                </div>
                                <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">{{$admin->full_name}}</span>
                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg">
                                                <img
                                                    src="assets/img/profile.jpg"
                                                    alt="image profile"
                                                    class="avatar-img rounded"
                                                />
                                            </div>
                                            <div class="u-text">
                                                <h4>Hizrian</h4>
                                                <p class="text-muted">hello@example.com</p>
                                                <a
                                                    href="profile.html"
                                                    class="btn btn-xs btn-secondary btn-sm"
                                                >View Profile</a
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">My Balance</a>
                                        <a class="dropdown-item" href="#">Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{route('auth.logout')}}">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <div class="container">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-round">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">User Statistics</div>
                                    <div class="card-tools">
                                        <a
                                            href="#"
                                            class="btn btn-label-success btn-round btn-sm me-2"
                                        >
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                                            Export
                                        </a>
                                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                                            Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container" style="min-height: 375px">
                                    <canvas id="statisticsChart"></canvas>
                                </div>
                                <div id="myChartLegend"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary card-round">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">Daily Sales</div>
                                    <div class="card-tools">
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-sm btn-label-light dropdown-toggle"
                                                type="button"
                                                id="dropdownMenuButton"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >
                                                Export
                                            </button>
                                            <div
                                                class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton"
                                            >
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#"
                                                >Something else here</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-category">March 25 - April 02</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="mb-4 mt-2">
                                    <h1>$4,578.58</h1>
                                </div>
                                <div class="pull-in">
                                    <canvas id="dailySalesChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card card-round">
                            <div class="card-body pb-0">
                                <div class="h1 fw-bold float-end text-primary">+5%</div>
                                <h2 class="mb-2">17</h2>
                                <p class="text-muted">Users online</p>
                                <div class="pull-in sparkline-fix">
                                    <div id="lineChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

@section("js")

@endsection
