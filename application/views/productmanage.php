          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Product</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Specification</th>
                  <th>comment</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($product as $item): ?>
                  <tr>
                    <td><?php echo $item['idproduct']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['specification']; ?></td>
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
