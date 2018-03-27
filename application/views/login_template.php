<!DOCTYPE html>

<html>
  <head>
    <title><?php echo $title ?></title>
    <?php $this->load->view('include/head'); ?> <!-- head besisi meta, favicon, SEO keyword, dll -->
    <?php $this->load->view('include/link_form'); ?> <!-- link CSS dan JS untuk Form Template -->
  </head>
  <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><?php echo $title ?></a>
  </div>
  <!-- /.login-logo -->
  <?php $this->load->view('contents/'.$file); ?>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</html>
