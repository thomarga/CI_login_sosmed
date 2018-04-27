
<div class="login-box-body">
  <p class="login-box-msg">Sign in to start your session</p>

 <a> selamat datang di home anda sudah sudah login </a><br>
 <td><?php echo  $first_name; ?></td>

  <div class="social-auth-links text-center">
    <p>- OR -</p>
  <a href="" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
    Facebook</a>
    <a href="<?php echo base_url()?>Googlereg/google_login" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
      Google+</a>
  </div>
  <!-- /.social-auth-links -->

  <a href="<?php echo base_url()?>Googlereg/logout">Logout </a><br>
  <a href="googlereg/register" class="text-center">Register a new membership</a>

</div>
