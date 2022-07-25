<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Email Form</title>

    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <?php include 'db.php'; ?>
</head>

<body>
    <div class="container">
        
        <div class="title panel panel-primary panel-heading text-left">Welcome to Registration Page</div>
        <form aciton ="#" name="regForm" class="panel-body" onsubmit="return validateForm()" method="post">

            <div class="formdesign" id="name">
                <label>Name : </label>
                <input type="text" name="fname" required>
                <b><span class="formerror"> </span></b>
                <div class="forminfo"> *First Letter of Name Should Start with Capital Letter </span>
            </div>

            <div class="formdesign" id="phone">
                <label>Phone : </label>
                <input type="text" name="fphone" required>
                <b><span class="formerror"> </span></b>
                <div class="forminfo"> *Phone Number Should Start with +88 </span>
            </div>

            <div class="formdesign" id="email">
                <label>Email : </label>
                <input type="text" name="femail" required>
                <b><span class="formerror"> </span></b>
                <div class="forminfo"> *Email Should Include @ Sign and End with '.com' </span>
            </div>

            <div class="formdesign" id="address">
                <label>Address : </label>
                <input type="text" name="faddress" required>
                <b><span class="formerror"> </span></b>
                <div class="forminfo"> *Address Have to be Valid </span>
            </div>
            
            <input class="button" type="submit" value="Submit" name="submit">

            <div class="panel-footer text-right">
                <small>&copy;Syed Zaki Reza</small>
            </div>
        </form>
    </div>
    
</body>
</html>

<?php
    error_reporting(0);
    if($_POST['submit']){
        $fname = $_POST['fname'];
        $fphone = $_POST['fphone'];
        $femail = $_POST['femail'];
        $faddress = $_POST['faddress'];

        $query = "INSERT INTO form VALUES('$fname', '$fphone', '$femail', '$faddress')";
        $data = mysqli_query($connection, $query);

        if(!$data) echo "<script>alert('No Data Passed')</script>";
    }
?>