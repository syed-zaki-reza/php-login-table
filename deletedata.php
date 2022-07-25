<style>
    .delete{
        background-color: red;
        color: white;
        border: 0;
        outline: none;
        border-radius: 5px;
        height: 23px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
    }
</style>

<?php
    include("db.php");
    error_reporting(0);

    $id = $_GET['id'];

    $query = "DELETE FROM form WHERE id = '$id' ";
    $data = mysqli_query($connection, $query);

    if($data) {
        echo "Record Deleted";
    } else {
        echo "Failed to Delete";
    }
?>