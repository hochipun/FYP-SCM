          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="canvas-holder">
                  <canvas id="order-area" width="150" height="150"/>
              </div>
              <h4>Order Status</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="canvas-holder">
                  <canvas id="material-area" width="100" height="100"/>
              </div>
              
              <h4>Material Status</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="canvas-holder">
                  <canvas id="product-area" width="150" height="150"/>
              </div>
              <h4>Product Status</h4>
              <span class="text-muted"></span>
            </div>
          </div>
          <script>
                var orderData = [
                  {
                    value: 300,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                  },
                  {
                    value: 50,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Green"
                  },
                  {
                    value: 120,
                    color: "#4D5360",
                    highlight: "#616774",
                    label: "Dark Grey"
                  }
                ];
                var materialData = [
                  {
                    value: 10,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                  },
                  {
                    value: 40,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Grey"
                  },
                  {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Yellow"
                  },

                ];
                var productData = [
                  {
                    value: 300,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                  },
                  {
                    value: 50,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Green"
                  },
                  {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Yellow"
                  },

                ];


                window.onload = function(){
                  var ctx1 = document.getElementById("order-area").getContext("2d");
                  var ctx2 = document.getElementById("material-area").getContext("2d");
                  var ctx3 = document.getElementById("product-area").getContext("2d");
                  window.myDoughnut = new Chart(ctx1).Doughnut(orderData, {responsive : true});
                  window.myDoughnut = new Chart(ctx2).Doughnut(materialData, {responsive : true});
                  window.myDoughnut = new Chart(ctx3).Doughnut(productData, {responsive : true});
                  
                  
                };



            </script>


          <h2 class="sub-header">Latest Material update</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Material</th>
                  <th>Serial_number</th>
                  <th>Amount</th>
                  <th>Operator</th>
                  <th>Other</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($material as $item0): ?>
                <tr>
                  <td><?php echo $item0['idmaterial_record']; ?></td>
                    <td><?php echo $item0['material_id']; ?></td>
                    <td><?php echo $item0['serial_number']; ?></td>
                    <td><?php echo $item0['amount'];?></td>
                    <td><?php echo $item0['operator'];?></td>
                    <td><a href="#">detail</a></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <h2 class="sub-header">Latest Product update</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Product</th>
                  <th>serial_number</th>
                  <th>Amount</th>
                  <th>Operator</th>
                  <th>Other</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($product as $item): ?>
                <tr>
                  <td><?php echo $item['idproduct_record']; ?></td>
                    <td><?php echo $item['productid']; ?></td>
                    <td><?php echo $item['serial']; ?></td>
                    <td><?php echo $item['amount'];?></td>
                    <td><?php echo $item['operator'];?></td>
                    <td><a href="#">detail</a></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bootstrap/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/bootstrap/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap/ie10-viewport-bug-workaround.js"></script>
  

</body></html>