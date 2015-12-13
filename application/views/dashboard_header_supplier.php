<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
$this->session;
?>
<!DOCTYPE html>
<!-- saved from url=(0041)http://v3.bootcss.com/examples/dashboard/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>SCM Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/bootstrap/dashboard.css" rel="stylesheet">
    
    <script src="/bootstrap/ie-emulation-modes-warning.js"></script>

    <!--fancybox-->
    <link rel="stylesheet" type="text/css" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <!--fancy box css and js -->
    <script type="text/javascript" src="/fancybox/lib/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <!--Chart.js-->
    <script src="/Chart/Chart.js"></script>
    

    
    <script type="text/javascript">
      $(document).ready(function(){
        $('.fancybox').fancybox();
      });
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="modal fade" id="logoutmodal">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Logout</h3>
          </div>
          <div class="modal-body">
            <p>Are you confirm to logout?</p>
          </div>
          <div class="modal-footer">
            <a href="<?php echo site_url('main/logout');?>"><button type="button" class="btn btn-danger">Logout</button><a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancal</button>

          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('/main');?>">SCM Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><bond>Welcome Back!</bond></a></li>
            <li><a href="#"><?php $_SESSION['name'];?></a></li>
            <li><a data-toggle="modal" data-target="#logoutmodal">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
