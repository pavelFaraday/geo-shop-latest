<?php 
require("inc/db.php");


if ($_POST) {
    $barcode = 'SKU-'.uniqid($_POST['barcode']); 
    $name = ($_POST['name']);
    $price = $_POST['price'];
    $size = ($_POST['size']); 
    $weight = ($_POST['weight']);
    $image = ($_POST['image']);

    $height = $_POST['height'];
    $width = ($_POST['width']);
    $length = $_POST['length'];


    // add new record in a table
    try {
        $sql = 'INSERT INTO products (barcode, name, price, size, weight, image, height, width, length) 
                VALUES '.'(:barcode, :name, :price, :size, :weight, :image, :height, :width, :length)';
 

    // prepare sql and bind parameters
        $stmt = $conn->prepare($sql);  
        $stmt->bindParam(":barcode", $barcode);  
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":size", $size);
        $stmt->bindParam(":weight", $weight);
        $stmt->bindParam(":image", $image);

        $stmt->bindParam(":height", $height);
        $stmt->bindParam(":width", $width);
        $stmt->bindParam(":length", $length);

        $stmt->execute();

    // STATUS on creation new product 
        if ($stmt->rowCount()) {
            header("Location: create.php?status=created");
            exit();  
        }
        header("Location: create.php?status=fail_create");
        exit();
    } catch (Exception $e) {
        echo "Error " . $e->getMessage(); 
        exit();
    }
} else {
    header("Location: create.php?status=fail_create");
    exit();
}




?>