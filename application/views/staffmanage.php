          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Staff</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Username</th>
                  <th>Real Name</th>
                  <th>User Level</th>
                  <th>Phone</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($staff as $employee): ?>
                  <tr>
                    <td><?php echo $employee['iduser']; ?></td>
                    <td><?php echo $employee['username']; ?></td>
                    <td><?php echo $employee['firstname']; ?></td>
                    <td><?php echo $employee['userlevel']?></td>
                    <td><?php echo $employee['phone']; ?></td>
                    <td><?php echo $employee['email']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
