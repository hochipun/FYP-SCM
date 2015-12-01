
  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Benny's Factory</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li <?php if($type=='staff') echo 'class="active"';?>><a href="<?php echo base_url();?>">Home</a></li>
                  <li <?php if($type=='client') echo 'class="active"';?>><a href="<?php echo site_url('welcome/client');?>">Client</a></li>
                  <li <?php if($type=='supplier') echo 'class="active"';?>><a  href="<?php echo site_url('welcome/supplier');?>">Supplier</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Benny's SCM</h1>
            <p class="lead"><?php echo $welcomemsg;?></p>
            <p class="lead">
              <a href="<?php echo site_url('login/index');?>/<?php echo $type;?>" class="btn btn-lg btn-default">Login</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bootstrap/jquery.min.js"></script>
    <script src="/bootstrap/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap/ie10-viewport-bug-workaround.js"></script>
  

</body></html>