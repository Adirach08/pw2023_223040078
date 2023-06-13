<?php 

    include 'connect.php';

    $category_name = $_POST['category_name'];
    $category_image = $_FILES['category_image']['name'];

    $imageDir = "assets/images/categories/";
    $imageTemp = $_FILES['category_image']['tmp_name'];

    move_uploaded_file($imageTemp, $imageDir.$category_image);

    $query = "INSERT INTO categories VALUES(null, '$category_name', '$category_image')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: dashboard-category.php");
    } else {
        echo $query;
    }
    
?>