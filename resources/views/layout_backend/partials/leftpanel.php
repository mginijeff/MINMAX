<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="admin"><img src="{{ URL::asset('back/images/logo.png')}}" alt="MINMAX"></a>
                <a class="navbar-brand hidden" href="admin"><img src="{{ URL::asset('back/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="Dashboard_admin"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                   <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-birthday-cake"></i>Business</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="post_business">Post Business</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="viewBusiness">View Business</a></li>
                            <li><i class="fa fa-bars"></i><a href="customers">Booked Materials</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Services</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="post_service">Post service</a></li>
                            <li><i class="fa fa-table"></i><a href="view_service">View Service</a></li>
                            <li><i class="fa fa-table"></i><a href="booked_service">Booked Service</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Registration</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="register_super">Register Staff Member</a></li>
                    </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Users</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="customer">Customers </a></li>
                    <li><i class="fa fa-table"></i><a href="staff">Staffs Members </a></li>
                    </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->