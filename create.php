<?php include("inc/option.php") ?>   
<?php include("inc/header.php") ?>





    <div class="container">
        <a href="index.php" class="btn btn-light mb-3"><< Go Back</a>

        <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Created</strong>
        </div>
        
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Create</strong>
        </div>
        <?php endif ?>
        



        <!-- Create Form -->
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
            </div>
            <div class="card-body">
            <form action="add.php" method="post">
                    <div class="form-row">
                    
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                    </div>
                   
<!-- ------------------------------------------------------------------ -->
               
             
                <div class="input-group  mb-4">
               
                        <select onchange="fetch_select(this.value);" class="custom-select" name="inputGroupSelect01" id="inputGroupSelect01" required>
                        <option selected>Choose Product</option>
                        <option value="Please, provide DVD Memory Size in MB format. Example: 120MB">DVD-disc</option>
                        <option value="Please, provide Book weight in KG format. Example: 5 KG">Book</option>
                        <option value="Please, provide furniture dimensions in HxWxL format. Example: 120x100x70 CM">Furniture</option>
                    </select>
                      

                    <div class="bg-danger text-white rounded border col-md-7 ml-3">
                       <div id="print-ajax" class="text-center font-weight-bolder"> Please, choose product! </div>
                    </div>

                </div>
                    


<!-- ------------------------------------------------------------------ -->
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="size" id="size"  placeholder="size (MB)">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight (kg)">
                    </div>

                    <div class="form-column col-md-4">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="height" id="height" placeholder="height (cm)">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="width" id="width" placeholder="width (cm)">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="length" id="length" placeholder="length (cm)">
                        </div>
                     </div>
            
                </div>






                    <div class="form-row">
                       <div class="form-group col-md-4">
                           <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                       </div>
                    </div>
                    
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- End create form -->

        <br>
    </div> <!-- END container -->


<?php include("inc/footer.php") ?>