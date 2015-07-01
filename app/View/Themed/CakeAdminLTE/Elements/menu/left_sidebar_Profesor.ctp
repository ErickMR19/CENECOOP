

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="info" style="position: initial; text-align: center;">
                <p style="margin: 0px;">Hola, <?php echo $nombreApellidoDelUsuario;?></p>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                    <a href="<?php echo $this->webroot;?>">
                        <i class="fa fa-dashboard"></i> <span>Inicio</span>
                    </a>
            </li>
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendario</span>
                </a>
            </li>
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-university"></i> <span>Calificar</span>
                </a>
            </li>
            <li class="treeview">
                <a href='#'>
                    <i class="fa fa-university"></i> <span>Planes de Estudio</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->webroot;?>plandeestudios/"><i class="fa fa-angle-double-right"></i>Listar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href='#'>
                    <i class="fa fa-pencil"></i> <span>Cursos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->webroot;?>cursos/"><i class="fa fa-angle-double-right"></i>Listar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href='#'>
                    <i class="fa fa-users"></i> <span>Cooperativas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->webroot;?>cooperativas/"><i class="fa fa-angle-double-right"></i>Listar</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
