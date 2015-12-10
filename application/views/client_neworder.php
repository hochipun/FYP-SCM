          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">New Order</h1>
            </div>
            <div class="clo-md-2">
              <form></form>
            </div>
            <?php foreach ($productinfo as $item): ?>
            <div class="col-lg-3">
              <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
              <h4><?php echo $item['name'];?></h4>
              <p>specification:<?php echo $item['specification'];?></p>
              <p><a class="btn btn-default fancybox fancybox.iframe" href="<?php echo site_url('/clientmain/addorder');?>/<?php echo $item['idproduct'];?>" role="button">Order this »</a></p>
            </div>
            <?php endforeach;?>

            </div>    
          </div>
        </div>
      </div>
    </div>
    