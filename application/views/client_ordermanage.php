          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">Order</h1>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addorder">Add Order</button>
            </div>    
          </div>
          <h2 class="page-header">Pending order</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Order Date</th>
                  <th>Deadline</th>
                  <th>comment</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($order1 as $item1): ?>
                  <tr>
                    <td><?php echo $item1['idorder']; ?></td>
                    <td><?php echo $item1['name']; ?></td>
                    <td><?php echo $item1['quantity']?></td>
                    <td><?php echo $item1['orderdate']?></td>
                    <td><?php echo $item1['deadline']?></td>
                    <td><?php echo $item1['comment']?></td>
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
                  <th>Order Date</th>
                  <th>Deadline</th>
                  <th>comment</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($order2 as $item2): ?>
                  <tr>
                    <td><?php echo $item2['idorder']; ?></td>
                    <td><?php echo $item2['name']; ?></td>
                    <td><?php echo $item2['quantity']?></td>
                    <td><?php echo $item2['orderdate']?></td>
                    <td><?php echo $item2['deadline']?></td>
                    <td>Opertation for order in this status is not available</td>
                    <td><a href="#" class="disable">detail</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <h2 class="page-header">Sent Order</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Order Date</th>
                  <th>Deadline</th>
                  <th>comment</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($order3 as $item3): ?>
                  <tr>
                    <td><?php echo $item3['idorder']; ?></td>
                    <td><?php echo $item3['name']; ?></td>
                    <td><?php echo $item3['quantity']?></td>
                    <td><?php echo $item3['orderdate']?></td>
                    <td><?php echo $item3['deadline']?></td>
                    <td><?php echo $item3['comment']?></td>
                    <td><a role="button" class="btn btn-primary" href="<?php echo site_url('ordercontrol/finish_order');?>/<?php echo $item3['idorder'];?>">Confirm</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <h2 class="page-header">Old Order</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Order Date</th>
                  <th>Deadline</th>
                  <th>comment</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($order4 as $item4): ?>
                  <tr>
                    <td><?php echo $item4['idorder']; ?></td>
                    <td><?php echo $item4['name']; ?></td>
                    <td><?php echo $item4['quantity']?></td>
                    <td><?php echo $item4['orderdate']?></td>
                    <td><?php echo $item4['deadline']?></td>
                    <td><?php echo 'You cannnot modify finished order, it keeps as record'?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>


        </div>
      </div>
    </div>

