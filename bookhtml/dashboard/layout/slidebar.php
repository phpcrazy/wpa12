<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo $base_url; ?>/dashboard/dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo $base_url; ?>/dashboard/admin_view/order_list.php"><span class="glyphicon glyphicon-th-list"></span> Order</a>

            </li>
            <li>
                <a href="#"><span class="glyphicon glyphicon-th-list"></span> Books</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo $base_url; ?>/dashboard/admin_view/book_list.php"> All books</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/dashboard/admin_view/add_book.php"> Add books</a>
                    </li>
                </ul>    
            </li>

            <li>
                <a href="#"><span class="glyphicon glyphicon-user"></span> Customer</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo $base_url; ?>/dashboard/admin_view/customer/">All Customer</a>
                    </li>
                    <li>
                        <a href="#">Online Customer</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->

            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</nav>
        <!-- /.navbar-static-side -->