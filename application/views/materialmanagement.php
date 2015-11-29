          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">Material</h1>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct">Add material</button>
            </div>    
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Material ID</th>
                  <th>Material Name</th>
                  <th>Specification</th>
                  <th>Quantity</th>
                  <th>unit</th>
                  <th>comment</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($material as $item): ?>
                  <tr>
                    <td><?php echo $item['idmaterial']; ?></td>
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
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="addproduct">
      <div class="modal-dialog">
        
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Add Material</h3>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo site_url('productrecord/add');?>">
              <div class="form-group">
                <label class="">Material</label>
                <select class="form-control" name="productname" id="newon">
                  <?php foreach ($material as $additem):?>
                  <option value="<?php echo $additem['idmaterial'];?>"><?php echo $additem['name'];?></option>
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