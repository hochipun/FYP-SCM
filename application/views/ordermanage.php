          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Order</h1>
          <h2 class="page-header">Activated state order</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Client</th>
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
                    <td><?php echo $item1['client']; ?></td>
                    <td><?php echo $item1['product']; ?></td>
                    <td><?php echo $item1['quantity']?></td>
                    <td><?php echo $item1['orderdate']?></td>
                    <td><?php echo $item1['deadline']?></td>
                    <td><?php echo $item1['comment']?></td>
                    <td><a href="#">detail</a></td>
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
                  <th>Client</th>
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
                    <td><?php echo $item2['client']; ?></td>
                    <td><?php echo $item2['product']; ?></td>
                    <td><?php echo $item2['quantity']?></td>
                    <td><?php echo $item2['orderdate']?></td>
                    <td><?php echo $item2['deadline']?></td>
                    <td><?php echo $item2['comment']?></td>
                    <td><a href="#">detail</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>


        </div>
      </div>
    </div>
