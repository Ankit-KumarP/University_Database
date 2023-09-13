<!-- (08/09/23, 11/09/23 (7:02AM)), 17:06, (12/09/23) 5:57AM -->
<!-- PHP -->
<?php
include_once "./include/config.php";
$query = "SELECT * FROM `info` where 1";
$result = mysqli_query($connection, $query);
$sno = 1;
?>


<!--HTML;  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #table td,
    #table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #table tr:hover {
        background-color: #ddd;
    }

    #table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }

    h1 {
        width: 400px;
        margin: 10px auto;
        word-spacing: 12px;
    }

    .add {
        display: block;
        margin: 2px;
        padding: 15px;
    }

    .add:hover {

        cursor: pointer;
    }

    .add a {
        font-size: 20px;
    }

    .edit,
    .delete {
        text-align: center;
        background-color: peru;
        width: 80%;
        font-size: 20px;
        text-decoration: none;
    }

    .delete {
        background-color: red;
    }

    .delete,
    a {
        text-align: center;
        margin: auto;
    }
</style>

<body>
    <h1>UNIVERSITY DATA</h1>
    <div class="add"> <a href="insert.php">Add Data</a> </div>
    <table id="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Package</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php while ($arr = mysqli_fetch_assoc($result)) {  ?>
            <tr>
                <td><?= $sno ?></td>
                <td><?= $arr['Name'] ?></td>
                <td><?= $arr['Email'] ?></td>
                <td><?= $arr['Package'] ?></td>
                <td> <button class="edit"> <a href="edit.php?Id=<?= $arr['ID'] ?>">Edit</a> </button> </td>
                <td> <button class="delete"> <a href="delete.php?Id=<?= $arr['ID'] ?>">Delete</a> </button> </td>
            </tr>
        <?php
            $sno++;
        } ?>

    </table>
</body>

</html>