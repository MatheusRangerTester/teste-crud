<?php 

include "config.php";
$query = mysql_query($conn, "SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
        <h1>User List<h1>
           <a href="add.php">Add User</a>



           <table>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>

            <?php 
            $no = 1;
            while ($user = mysql_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td><?= $user['adress'] ?></td>
                <td>
                    <a href="edit.php">Edit Button</a>
                    <a href="" class="btn-delete">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>

    </div>
    
</body>
</html>