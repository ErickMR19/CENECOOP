<!-- header logo: style can be found in header.less -->
            <a href="<?php echo $this->webroot; ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <!-- mini logo for sidebar mini 50x50 pixels -->
                  <span class="logo-mini"><b>CN</b>C</span>
                  <!-- logo for regular state and mobile devices -->
                  <span class="logo-lg"><b>Cene</b>coop</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $nombreApellidoDelUsuario;?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-black" style="height: 100%;">
                                    <p>
                                        <?php echo $nombreCompletoDelUsuario;?>
                                        <small><?php echo $rolesDelUsuario;?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo $this->webroot; ?>users/resumen" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo $this->webroot; ?>users/logout" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
