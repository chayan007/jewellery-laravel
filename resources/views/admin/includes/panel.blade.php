<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">Jewellery</a>
            <a class="navbar-brand hidden" href="/"><i class="fa fa-signal"></i></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <h3 class="menu-title">Products</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Products</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-id-badge"></i><a href="/admin/addProduct">Add</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="/admin/product">Delete</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Categories</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Categories</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-balance-scale"></i><a href="/admin/addCategory">Add</a></li>
                        <li><i class="menu-icon fa fa-exclamation-triangle"></i><a href="/admin/category">Delete</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Orders</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Orders</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-balance-scale"></i><a href="/admin/active">Active Orders</a></li>
                        <li><i class="menu-icon fa fa-exclamation-triangle"></i><a href="/admin/reject">Completed Orders</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Agents</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Agents</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-balance-scale"></i><a href="/admin/agents">Check Agents</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Returns</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Returns</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-balance-scale"></i><a href="/admin/returns">Check Requests</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="/admin/logout"> <i class="menu-icon fa fa-sign-in"></i>Log Out </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
