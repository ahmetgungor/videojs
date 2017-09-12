<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet">
</head>
<body>
	
<?php 
$a = $this->db->get('login')->row();

 ?>
<body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form class="form-signin " action="?is=true" method="POST">
          <div class="panel periodic-login">
             
              <div class="panel-body text-center">
                 
                  <p class="atomic-mass">DSPOR TV GİRİŞ</p>
                 

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="email" required>
                    <span class="bar"></span>
                    <label>Kullanıcı Adı</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name="sifre" required>
                    <span class="bar"></span>
                    <label>Şifre</label>
                  </div>
                 
                  <input type="submit" class="btn col-md-12" value="Giriş Yap"/>
                  
              		
              </div>
              <?php if (!empty($msj)): ?>
              			
              				<?php foreach ($msj as $key => $value): ?>
              					<div class="alert alert-danger"><?=$value?></div>
              				<?php endforeach ?>
              			
              		<?php endif ?>
          </div>
        </form>

      </div>

<!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?=base_url()?>assets/admin/js/jquery.min.js"></script>
      <script src="<?=base_url()?>assets/admin/js/jquery.ui.min.js"></script>
      <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>

      <script src="<?=base_url()?>assets/admin/js/plugins/moment.min.js"></script>
      <script src="<?=base_url()?>assets/admin/js/plugins/icheck.min.js"></script>

      <script src="<?=base_url()?>assets/admin/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
</body>
</html>