<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html">Cenecoop</a>
    </div><!-- /.login-logo -->


    <div class="login-box-body">
      <p class="login-box-msg">Recuperar el acceso</p>
      <?php echo $this->Form->create('User', array('action' => 'forgetpw')); ?>
        <div class="form-group has-feedback">
          <?php echo $this->Form->input('username', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Correo Electrónico')); ?>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">

          <div class="col-xs-offset-2 col-xs-8">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Recuperar Contraseña</button>
          </div><!-- /.col -->
        </div>
    <?php echo $this->Form->end(); ?>
    <h4 style="color:red;"><?php echo $this->Session->flash('auth');
              echo $this->Session->flash(); ?> </h4>
      <a href="<?php echo $this->webroot; ?>personas/agregar_estudiante" class="text-center">Registrarse!</a>

    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->
