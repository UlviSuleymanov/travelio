@extends('layouts.admin.layout')

@section('content')
    <body class="container-fluid">
    <div class="row gap-0">
        <div class="col-md-6 gap-0">
            <div class="sidebar" data-background-color="dark">
                <div class="sidebar-logo">
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
                    </div>
                    <!-- End Logo Header -->
                </div>
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <ul class="nav nav-secondary">
                            <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                                <h4 class="text-section">Xəbərlər</h4>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#base">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Xəbərlər</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="base">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="{{route('admin.blogs-manage')}}">
                                                <span class="sub-item">Idarə et</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.blogs-add')}}">
                                                <span class="sub-item">Əlavə et</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                                <h4 class="text-section">Ana Səhifə</h4>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                    <i class="fas fa-th-list"></i>
                                    <p>Slider</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="sidebarLayouts">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="sidebar-style-2.html">
                                                <span class="sub-item">Sidebar Style 2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icon-menu.html">
                                                <span class="sub-item">Icon Menu</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#forms">
                                    <i class="fas fa-pen-square"></i>
                                    <p>Forms</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="forms">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="forms/forms.html">
                                                <span class="sub-item">Basic Form</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#tables">
                                    <i class="fas fa-table"></i>
                                    <p>Tables</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="tables">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="tables/tables.html">
                                                <span class="sub-item">Basic Table</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables/datatables.html">
                                                <span class="sub-item">Datatables</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#maps">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Maps</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="maps">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="maps/googlemaps.html">
                                                <span class="sub-item">Google Maps</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="maps/jsvectormap.html">
                                                <span class="sub-item">Jsvectormap</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#charts">
                                    <i class="far fa-chart-bar"></i>
                                    <p>Charts</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="charts">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="charts/charts.html">
                                                <span class="sub-item">Chart Js</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts/sparkline.html">
                                                <span class="sub-item">Sparkline</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="widgets.html">
                                    <i class="fas fa-desktop"></i>
                                    <p>Widgets</p>
                                    <span class="badge badge-success">4</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../documentation/index.html">
                                    <i class="fas fa-file"></i>
                                    <p>Documentation</p>
                                    <span class="badge badge-secondary">1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#submenu">
                                    <i class="fas fa-bars"></i>
                                    <p>Menu Levels</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="submenu">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a data-bs-toggle="collapse" href="#subnav1">
                                                <span class="sub-item">Level 1</span>
                                                <span class="caret"></span>
                                            </a>
                                            <div class="collapse" id="subnav1">
                                                <ul class="nav nav-collapse subnav">
                                                    <li>
                                                        <a href="#">
                                                            <span class="sub-item">Level 2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="sub-item">Level 2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="collapse" href="#subnav2">
                                                <span class="sub-item">Level 1</span>
                                                <span class="caret"></span>
                                            </a>
                                            <div class="collapse" id="subnav2">
                                                <ul class="nav nav-collapse subnav">
                                                    <li>
                                                        <a href="#">
                                                            <span class="sub-item">Level 2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 1</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 mt-5 gap-0" style="margin-left: 300px">
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h2 class="text-center mb-4">Blog Management</h2>

                        @if(session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($blog->description, 100) }}</td>
                                        <td>{{ $blog->slug }}</td>
                                        <td>
                                            @if($blog->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>


                                        <td>
                                            <a href="{{ route('admin.blogs-edit', ['id' => $blog->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.blogs-delete', ['id' => $blog->id]) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No blogs found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </body>
@endsection
