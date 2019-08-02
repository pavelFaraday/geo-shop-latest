<?php 
// DB connection
include("delete.php"); 


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
                <a href="create.php" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>

                <!-- 6) -->
                <button type="button" class="btn btn-danger float-right mr-3" id="delete"  onclick="return confirm('Are you sure?')" >Mass Delete</button>

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
                
                <?php while($row  = mysqli_fetch_array($userObj)){ ?>
                    
                    <tr>
                        <td>
                            <input class="checkbox" type="checkbox" id="<?php echo htmlspecialchars ($row['id']) ?>" name="id[]">
                        </td>

                        <td><?= ($row['barcode'])?></td>
                        <td><?= htmlspecialchars ($row['name'])?></td>
                        <td>$<?= number_format ($row['price'], 2) ?></td>

                        <td>
                            <?= htmlspecialchars ($row['weight']) ?>
                            <?= htmlspecialchars ($row['size']) ?>
                            <?= htmlspecialchars ($row['height']) ?><?= htmlspecialchars ($row['width']) ?><?= htmlspecialchars ($row['length']) ?>
                        </td>

                        <td>
                            <a href="#"><img src="<?= $row['image'] ?>" height="auto" width="100"  alt="<?= $row['name'] ?> class="card-img-top"></a>
                        </td>

                        
                    </tr>

                <?php } ?>             
          
            </tbody>
          </table>




  <!-- ================================================= -->
  
        </div>
      </div>
      <!-- End Table Product -->
      <br>
<?php include("inc/footer.php") ?>   <!-- Footer -->

