          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="col-md-10">
              <h1 class="page-header">Client</h1>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct">Add client</button>
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
