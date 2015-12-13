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
                  <th>Material Order ID</th>
                  <th>Supplier</th>
                  <th>Material</th>
                  <th>Quantity</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($order1 as $item1): ?>
                  <tr>
                    <td><?php echo $item1['idmaterialorder']; ?></td>
                    <td><?php echo $item1['sname']; ?></td>
                    <td><?php echo $item1['mname']; ?></td>
                    <td><?php echo $item1['amount']?></td>
                    <td><a class="fancybox fancybox.iframe" href="#">detail</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <h2 class="page-header">Finished Order</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Material Order ID</th>
                  <th>Supplier</th>
                  <th>Material</th>
                  <th>Quantity</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($order2 as $item2): ?>
                  <tr>
                    <td><?php echo $item2['idmaterialorder']; ?></td>
                    <td><?php echo $item2['sname']; ?></td>
                    <td><?php echo $item2['mname']; ?></td>
                    <td><?php echo $item2['amount']?></td>

                    <td><a class="fancybox fancybox.iframe" href="#">detail</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>



        </div>
      </div>
    </div>