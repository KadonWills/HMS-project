@extends('template')

@section('sub-menu')
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
            <h5 class="centered">Sam Soffes</h5>
            <li class="mt">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Manage Users</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ url('/admin/users') }}">View All</a></li>
                    <li><a href="#">Add a User</a></li>
                    <li><a href="#">Print Users</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Grant Priviledges</span>
                </a>
                <!-- <ul class="sub">
            <li><a href="#">View All</a></li>
            <li><a href="#">Add a User</a></li>
            <li><a href="#">Print Users</a></li>
        </ul>
        -->
        </li>
        <!--sidebar end-->
    </div>
</aside>
@endsection