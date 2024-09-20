<?php
include '../connection.php';  // Include database connection
include 'User.php';  // Include User class

$user = new User($mysqli);  // Create a User object

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role= $_POST['role'];

    if ($user->register($name, $email, $password, $role)) {
        echo "Registration successful!";
    } else {
        echo "Registration failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 justify-content-end">
    <h2>Sign Up</h2>
    <form method="post" action="register.php">
        <div class="mb-3 col-md-8">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3 mb-3 col-md-8">
            <label for="email" class="form-label ">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="mb-3 mb-3 col-md-8">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

            
    <label for="role">Select your role:</label>
    <select id="role" name="role">
        <option value="normal_user">Normal User</option>
        <option value="admin">Admin</option>
    </select>

    
</form>

        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
</body>
</html>
