<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="wrapper">
        <div class="form-warpper">
            <h1>Edit User</h1>
            <form methods="POST" actions="action.php"></form>
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="phone" name="phone" placeholder="Phone" required>
            <textarea name="adress" placeholder="Adress" required></textarea>
            <div class="btn-box">
                <button type="submit" class="btn" name="update">Update</button>
                <a href="index.php" class="btn">Cancel</a>
            </div>
        </div>
    </div>
    
</body>
</html>