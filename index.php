<?php 
// DB connection
include("delete.php"); 
require("inc/db.php");


try {
    // Create sql statement
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    // error output
} catch (Exception $e) {
    echo "Error " . $e->getMessage(); 
    exit();
}



?>
<?php include("inc/header.php") ?>   <!-- header -->

    <div class="container">
         <!-- Output/results on correct "delete" -->
        <?php if (isset($_GET['status']) && $_GET['status'] == "deleted") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Deleted</strong>
        </div>
        <?php endif ?>
           <!-- Output/results on uncorrect "delete" -->
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_delete") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Delete</strong>
        </div>
        <?php endif ?>


        <!-- Table Product -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <h5 class="card-title float-left">All Products</h5>
                <a href="create.php" class="btn btn-success float-right mb-3"> Add New</a>

                <!-- 6) -->
                <button type="button" class="btn btn-danger float-right mr-3" id="delete"  onclick="return confirm('Are you sure?')">Mass Delete</button>

            </div>
          </div>


<!-- ==================================================== -->


          <table class="table table-bordered table-striped">

                <thead>
                    <tr class="bg-warning">
                        <th>Del</th>
                        <th>SKU</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Characteristics</th>
                        <th>Image</th>
                    </tr>
                </thead>
            <tbody>
                
            <?php if ($result->rowCount() > 0) : ?>
                <?php foreach ($result as $product) : ?>
                    
                    <tr>
                        <td>
                            <input class="checkbox" type="checkbox" id="<?php echo htmlspecialchars ($product['id']) ?>" name="id[]">
                        </td>

                        <td><?= ($product['barcode'])?></td>
                        <td><?= htmlspecialchars ($product['name'])?></td>
                        <td>$<?= number_format ($product['price'], 2) ?></td>

                        <td>
                            <?= htmlspecialchars ($product['weight']) ?>
                            <?= htmlspecialchars ($product['size']) ?>
                            <?= htmlspecialchars ($product['height']) ?><?= htmlspecialchars ($product['width']) ?><?= htmlspecialchars ($product['length']) ?>
                        </td>

                        <td>
                            <a href="#"><img src="<?= $product['image'] ?>" height="auto" width="100"  alt="<?= $product['name'] ?> class="card-img-top"></a>
                        </td>

                        
                    </tr>
                    <?php endforeach ?>
                <?php endif ?>
                           
          
            </tbody>
          </table>




  <!-- ================================================= -->
  
        </div>
      </div>
      <!-- End Table Product -->
      <br>
<?php include("inc/footer.php") ?>   <!-- Footer -->

