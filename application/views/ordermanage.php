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
          <h2 class="page-header">New order</h2>
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
                    <td><?php echo $item1['client_id']; ?></td>
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
          <h2 class="page-header">Confirmed Order</h2>
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
                    <td><?php echo $item2['client_id']; ?></td>
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
          <h2 class="page-header">Sent Order</h2>
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
                    <td><?php echo $item2['client_id']; ?></td>
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
    <div class="modal fade" id="addorder">
      <div class="modal-dialog">
        
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Add Product</h3>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo site_url('productrecord/add');?>">
              <div class="form-group">
                <label class="">Product:</label>
                <select class="form-control" name="productname" id="newon">
                  <?php foreach ($product as $additem):?>
                  <option value="<?php echo $additem['idproduct'];?>"><?php echo $additem['name'];?></option>
                  <?php endforeach; ?>
                  <option id="newproduct" value="new">other</option>
                </select>  
              </div>
              <div class="form-group">
                <label>number</label>
                <input class="form-control" name="newamount">
              </div>
              <div class="form-group">
                <label>unit</label>
                <input class="form-control" name="unit">
              </div>
              <div class="form-group">
                <label>specification</label>
                <input class="form-control" name="specification">
              </div>
              <div class="form-group">
                <label>comment</label>
                <input class="form-control" name="comment">
              </div>
              
              <div class="form-group">
                <label>manifacure date</label>
                <input class="form-control" name="md">
              </div>
              <div class="form-group">
                <label>expiredate</label>
                <input class="form-control" name="ed">
              </div>
              <!--
              <div id="npn" class="form-group">
                <label>Product Name</label>
                <input class="form-control" placeholder="New product name">
              </div>
              -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="button" id="test" class="btn btn-default" data-dismiss="modal">Cancal</button>

          </div>
        </div>
      </div>
    </div>
