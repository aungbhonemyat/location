<?php
session_start();
$conn = mysqli_connect("localhost","root","","chooseu");

if(isset($_POST['save_select']))
{
    $name = $_POST['name'];
    

    $query = "INSERT INTO township (township_name) VALUES ('$name')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted township Succesfully";
        header("Location: admin_page.php");
    }
    else
    {
        $_SESSION['status'] = "Insert Fail";
        header("Location: admin_page.php");
    }
}


if(isset($_POST['cate_select']))
{
    
    $catego = $_POST['cate'];

    $query = "INSERT INTO categories (cate_name) VALUES ('$catego')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted categories Succesfully";
        header("Location: admin_page.php");
    }
    else
    {
        $_SESSION['status'] = "Insert fail";
        header("Location: admin_page.php");
    }
}

if(isset($_POST['city_select']))
{
    
    $gender = $_POST['city'];
    

    $query = "INSERT INTO city (city_name) VALUES ('$gender')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted City Succesfully";
        header("Location: admin_page.php");
    }
    else
    {
        $_SESSION['status'] = "Insert fail";
        header("Location: admin_page.php");
    }
}
?>