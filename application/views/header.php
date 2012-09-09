<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <title><?php echo $title ?>ISSPT - Instituto de Seguridad Social de la Provincia de Tucumán</title>  

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Sistema web">
  <meta name="author" content="mwds">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Le styles -->
  <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }
    .sidebar-nav {
      padding: 9px 0;
    }
  </style>
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="<?=base_url();?>assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>assets/ico/apple-touch-icon-144-precomposed.png" sizes="144x144">
  <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>assets/ico/apple-touch-icon-114-precomposed.png" sizes="114x114">
  <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>assets/ico/apple-touch-icon-72-precomposed.png" sizes="72x72" >
  <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>assets/ico/apple-touch-icon-57-precomposed.png">

  <script src="<?=base_url();?>assets/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>

</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?=base_url();?>">ISSPT</a>
        <div class="nav-collapse collapse">
          <p class="navbar-text pull-right">
            Inicio sesion como <a href="#" class="navbar-link">Username</a>
          </p>
          <ul class="nav">
            <li class="active"><a href="<?=base_url();?>">Inicio</a></li>
            <li><a href="<?=base_url();?>index.php/pedidos">Pedidos (Lista)</a></li>
            <li><a href="<?=base_url();?>index.php/pedidos/abm">Pedidos (ABM)</a></li>
            <li><a href="<?=base_url();?>index.php/oc">Orden de compra (Lista)</a></li>
            <li><a href="<?=base_url();?>index.php/oc/abm">Orden de compra (ABM)</a></li>
            <li><a href="<?=base_url();?>index.php/oc/liberar">Orden de compra (Liberar)</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">