<?php
    include 'connect.php';

    if (isset($_GET['delete'])) {
        $category_id = $_GET['delete'];

        $categoryShow = "SELECT * FROM categories WHERE id = '$category_id';";
        $sqlShow = mysqli_query($conn, $categoryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("assets/images/categories/".$result['category_image']);

        $query = "DELETE FROM categories WHERE id = '$category_id';";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location: dashboard-category.php");
        } else {
            echo $query;
        }
    }

?>