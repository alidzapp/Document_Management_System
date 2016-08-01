<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="/assets/img/sidebar-1.jpg">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    MY DMS
                </a>
            </div>

            <ul class="nav">

                <li <?php if ($page_name == "main"){ ?>class="active"<?php } ?>>
                    <a href="/mydms/view">
                        <i class="pe-7s-user"></i>
                        <p>Your Profile</p>
                    </a>
                </li>

                <?php
                $privilige = 0;
                if (isset($_SESSION["authenticator"])) {
                    $privilige = $_SESSION["authenticator"][0];
                }
                if ($privilige["role"] == 2) {
                ?>
                <li <?php if ($page_name == "user"){ ?>class="active"<?php } ?>>
                    <a href="/user/view">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li <?php if ($page_name == "group"){ ?>class="active"<?php } ?>>
                    <a href="/group/view">
                        <i class="pe-7s-users"></i>
                        <p>Group</p>
                    </a>
                </li>
                <!--li <?php if ($page_name == "role"){ ?>class="active"<?php } ?>>
                    <a href="/role/view">
                        <i class="pe-7s-news-paper"></i>
                        <p>Role</p>
                    </a>
                </li-->
                <li <?php if ($page_name == "department"){ ?>class="active"<?php } ?>>
                    <a href="/department/view">
                        <i class="pe-7s-science"></i>
                        <p>Departemts</p>
                    </a>
                </li>
                <li <?php if ($page_name == "access_control"){ ?>class="active"<?php } ?>>
                    <a href="/access_control/view">
                        <i class="pe-7s-door-lock"></i>
                        <p>Security Groups</p>
                    </a>
                </li>
                <?php }?>
                <li <?php if ($page_name == "wiki"){ ?>class="active"<?php } ?>>
                    <a href="/wiki/view">
                        <i class="pe-7s-note2"></i>
                        <p>Wiki</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li style="display: none;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown" style="display: none;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <b class="caret"></b>
                                <span class="notification">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="" style="display: none;">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li style="display: none;">
                            <a href="">
                                Account
                            </a>
                        </li>
                        <li class="dropdown" style="display: none;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Dropdown
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/logout/?logout">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>