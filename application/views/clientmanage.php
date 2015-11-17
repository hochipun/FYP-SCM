          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Client</h1>
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
                <?php foreach ($client as $oneclient): ?>
                  <tr>
                    <td><?php echo $oneclient['idclient']; ?></td>
                    <td><?php echo $oneclient['name']; ?></td>
                    <td><?php echo $oneclient['phone']; ?></td>
                    <td><?php echo $oneclient['email']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
