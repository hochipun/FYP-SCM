          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">Client</h1>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addclient">Add client</button>
            </div>    
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Client ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($clientinfo as $oneclient): ?>
                  <tr>
                    <td><?php echo $oneclient['idclient']; ?></td>
                    <td><?php echo $oneclient['name']; ?></td>
                    <td><?php echo $oneclient['phone']; ?></td>
                    <td><?php echo $oneclient['email']; ?></td>
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
                <li class="<?php if($i==$index){echo 'active';} ?>"><a href="<?php echo site_url('/main/client')?>/<?php echo $i;?>"><?php echo $i;?></a></li>
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
    <div class="modal fade" id="addclient">
      <div class="modal-dialog">
        
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Add Client</h3>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo site_url('client/add');?>">  
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="newclientname">
              </div>
              <div class="form-group">
                <label>phone</label>
                <input class="form-control" name="newclientphone">
              </div>
              <div class="form-group">
                <label>email</label>
                <input class="form-control" name="newclientemail">
              </div>
              <div class="form-group">
                <label>address</label>
                <input class="form-control" name="newclientaddress">
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
