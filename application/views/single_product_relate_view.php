<!DOCTYPE html>
<!-- saved from url=(0049)http://v3.bootcss.com/examples/jumbotron-narrow/# -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>Product view</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/bootstrap/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/bootstrap/ie-emulation-modes-warning.js"></script>
    <script src="/Chart/Chart.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" <?php if($type=='productrecord') echo 'class="active"';?>><a href="<?php echo site_url('/Productrecord/checkrecord');?>/<?php echo $detail['idproduct'];?>">Product record</a></li>
            <li role="presentation" <?php if($type=='relatematerial') echo 'class="active"';?>><a href="<?php echo site_url('/Productrecord/relatematerial/');?>/<?php echo $detail['idproduct'];?>">Material require</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo $detail['name'];?></h3>
      </div>
      <h3>Relate Material</h3>
      <div class="marketing row">
        <?php foreach ($materialrelate as $item):?>
          <div class="col-lg-6">
            <h4><?php echo $item['name'];?></h4>
            <p>require quantity for per product: <?php echo $item['material_q'];?><?php echo $item['unit'];?></p>
            <p><?php echo $item['specification'];?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <footer class="footer">
        <p>© 2015 FYP SCM</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap/ie10-viewport-bug-workaround.js"></script>
  

</body></html>