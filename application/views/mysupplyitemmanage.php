          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">My supply item</h1>
            </div>
            <div class="col-md-2">
            </div>    
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Material Name</th>
                  <th>Specification</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($myitem as $item): ?>
                  <tr>
                    <td><?php echo $item['mname']; ?></td>
                    <td><?php echo $item['specification']; ?></td>
                    <td><a role="button" class="btn btn-danger" href="#">I don't supply this item any more.</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">New supply item</h1>
            </div>
            <div class="clo-md-2">
              <form></form>
            </div>
            <?php foreach ($availablelist as $item): ?>
            <div class="col-lg-3">
              <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
              <h4><?php echo $item['name'];?></h4>
              <p>specification:<?php echo $item['specification'];?></p>
              <p><a class="btn btn-success" href="#" role="button">I can supply this »</a></p>
            </div>
            <?php endforeach;?>

            </div>    
          </div>
        </div>
      </div>
    </div>