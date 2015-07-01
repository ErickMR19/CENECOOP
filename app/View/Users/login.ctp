  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html">Cenecoop</a>
      </div><!-- /.login-logo -->


      <div class="login-box-body">
        <p class="login-box-msg">Ingrese sus datos para iniciar sesión</p>
        <?php echo $this->Form->create('User'); ?>
          <div class="form-group has-feedback">
            <?php echo $this->Form->input('username', array('type' => 'text', 'label' => false, 'class'=>'form-control', 'placeholder'=>'Correo Electrónico')); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
             <?php echo $this->Form->input('password', array('label'=>false,'class'=>"form-control", 'placeholder'=>"Password")); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">

            <div class="col-xs-offset-4 col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div><!-- /.col -->
          </div>
      <?php echo $this->Form->end(); ?>
      <h4 style="color:red;"><?php echo $this->Session->flash('auth');
                echo $this->Session->flash(); ?> </h4>
        <a href="<?php echo $this->webroot; ?>users/forgetpw">Olvidé mi contraseña!</a><br>
        <a href="<?php echo $this->webroot; ?>personas/agregar_estudiante" class="text-center">Registrarse!</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
