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

                    <div class="col-md-3 ajax-del"> <!-- Delete div with AJAX--> 
                      <div class="card border-secondary mb-2">
                    

                        <a href="#"><img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="card-img-top img-fluid"></a>

                        

                        <div class="card-body bg-light text-center">

                            
                              <input type="checkbox"  class="float-left" id="<?php echo $product['id'] ?>" name="id[]"></<input>
                              

                              <p class="card-text mt-3">#<?=$product  ['barcode'] ?></p>
                              <h5 class="card-title text-danger font-weight-bold"><?= $product  ['name'] ?></h5>
                              <p>$<?= number_format($product  ['price'], 2) ?></p>

                              <p class="card-text"><?=$product ['weight'] ?></p>
                              <p class="card-text"><?=$product ['size'] ?></p>
                              <p class="card-text"><?=$product ['height'] ?> <?=$product ['width'] ?> <?=$product ['length'] ?> </p>


                        </div>
                        
                    
                      </div>
                    </div>

            <?php endforeach ?>
          <?php endif ?>
                           
        </div>




  <!-- ================================================= -->
  
        </div>
      </div>
      <!-- End Product -->
      <br>
<?php include("inc/footer.php") ?>   <!-- Footer -->

