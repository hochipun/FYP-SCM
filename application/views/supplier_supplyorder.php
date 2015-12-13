          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">Order</h1>
            </div>
            <div class="col-md-2">
            </div>    
          </div>
          <h2 class="page-header">New order</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Material</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($newtask as $item1): ?>
                  <tr>
                    <td><?php echo $item1['idmaterialorder']; ?></td>
                    <td><?php echo $item1['name']; ?></td>
                    <td><?php echo $item1['amount']?></td>
                    <td><a class="btn btn-primary" href="<?php echo site_url('/supplycontrol/sendsupply');?>/<?php echo $item1['idmaterialorder'];?>">send</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <h2 class="page-header">Confirmed Order</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Product</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($oldorder as $item2): ?>
                  <tr>
                    <td><?php echo $item2['idmaterialorder']; ?></td>
                    <td><?php echo $item2['name']; ?></td>
                    <td><?php echo $item2['amount']?></td>
                    <td><?php echo 'old order is not available to modify'?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        