          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">Product</h1>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct">Add Product</button>
            </div>    
          </div>      
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Specification</th>
                  <th>Quantity</th>
                  <th>Unit</th>
                  <th>comment</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($productinfo as $item): ?>
                  <tr>
                    <td><?php echo $item['idproduct']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['specification']; ?></td>
                    <td><?php echo $item['current_no']; ?></td>
                    <td><?php echo $item['unit']; ?></td>
                    <td><?php echo $item['comment']?></td>
                    <td><a href="#">detail</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <?php 
                  for($i=1;$i!=$page;$i++){ 
                ?>
                <li class="<?php if($i==$index){echo 'active';} ?>"><a href="<?php echo site_url('/main/product')?>/<?php echo $i;?>"><?php echo $i;?></a></li>
                <?php } ?>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="addproduct">
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

