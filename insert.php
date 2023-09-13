<!-- (09/09/23) 10:24am, (12/09/23), 6:46am  -->
<!-- PHP -->
<?php
require "./include/config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $package = $_POST['package'];
    $query = "INSERT INTO `info`(`ID`, `Name`, `Email`, `Package`) VALUES 
    (NULL,'$name','$email','$package')";
    $dataEnter = mysqli_query($connection, $query);
    if ($dataEnter) {
        echo "<script> alert('Data Entered Successfully') </script>";
        echo "<script> location.replace('insert.php')  </script>";
    } else {
        echo  $connection->errno;
    }
}


// HTML
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .form {
        font-size: 18px;
        text-align: center;
        margin: auto;
        width: 50vw;
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid greenyellow;
    }

    .btn {
        background-color: gray;
        color: while;
        font-size: 18px;
        border-radius: 5px;
        width: 100px;
        height: 50px;
        margin: 0px 5px;
    }

    .btn:hover {
        cursor: pointer;
        background-color: gray;
        opacity: 0.9;
    }

    input {
        padding: 10px;
        margin: 10px;
        display: block;
        font-size: 18px;
    }

    label {
        font-size: 21px;
    }

    h1 {
        display: block;
        width: 19vw;
        margin: 20px auto;
        word-spacing: 9px;
    }

    a {
        text-decoration: none;
        color: black;
    }
</style>

<body>
    <h1> ADD YOUR DATA</h1>
    <div class="form">
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="name" name="username" class="name" /><br>
            <label for="email"> Email </label>
            <input type="email" name="email" class="email" /><br>
            <label for="package"> Package </label>
            <input type="number" name="package" class="package" /><br>
            <button type="submit" name="submit" class="btn">Submit</button>
            <button class="btn"><a href="/crud/preview.php">Preview</a></button>
        </form>
    </div>
</body>

</html>