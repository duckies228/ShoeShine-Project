<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="backend/img/profile_small.jpg" />
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                                        Admin   
                                    </strong>
                                </span> <span class="text-muted text-xs block">Store Manager<b
                                        class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href=#>Logout</a></li>
                        </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Quản Lý Cửa Hàng</span></a>
                <ul class="nav nav-second-level">
                    <li><a href="index.html">Quản Lý Sản Phẩm</a></li>
                    <li class="active"><a href="dashboard_2.html">Quản Lý Đơn Hàng</a></li>
                    <li><a href="dashboard_3.html">Quản Lý Khách Hàng</a></li>
                    <li><a href="{{ route('user.index') }}">Quản Lý Nhân Viên</a></li>
                    <li><a href="dashboard_4_1.html">Quản Lý Kho Hàng</a></li>
                </ul>
            </li>
            <li>
        </ul>
    </div>
</nav>
