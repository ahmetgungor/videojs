
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DSPORT TV</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/plugins/animate.min.css"/>
  <link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>DSPOR TV</b>
                </a>

              

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?=$sess['email']?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span>Kullanıcı Bilgilerini Değiştir.</a></li>
                    
                     <li role="separator" class="divider"></li>
                     <li><a href="#"><span class="fa fa-user"></span>Güvenli Çıkış</a></li>
                  </ul>
                </li>
               
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
