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


          <div class="row">
                
            <?php if ($result->rowCount() > 0) : ?>
                <?php foreach ($result as $product) : ?>

                    <div class="col-md-3 ajax-del">
                      <div class="card">
                    

                        <a href="#"><img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="card-img-top"></a>

                        <div class="card-body text-center">

                              <p class="card-text">#<?=$product  ['barcode'] ?></p>
                              <h5 class="card-title text-danger font-weight-bold"><?= $product  ['name'] ?></h5>
                              <p>$<?= number_format($product  ['price'], 2) ?></p>

                              <p class="card-text"><?=$product ['weight'] ?></p>
                              <p class="card-text"><?=$product ['size'] ?></p>
                              <p class="card-text"><?=$product ['height'] ?></p>
                              <p class="card-text"><?=$product ['width'] ?></p>
                              <p class="card-text"><?=$product ['length'] ?></p> 

                              <input class="checkbox m-2" type="checkbox" id="<?php echo $product['id'] ?>" name="id[]"></<input>
                        </div>
                        
                    
                      </div>
                    </div>

            <?php endforeach ?>
          <?php endif ?>
                           
        </div>




  <!-- ================================================= -->
  
        </div>
      </div>
      <!-- End Table Product -->
      <br>
<?php include("inc/footer.php") ?>   <!-- Footer -->

