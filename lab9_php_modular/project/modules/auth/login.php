<?php

if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    header('location: index.php?page=user/list');
    exit;
}

$error = '';
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        if (password_verify($password, $data['password'])) {
            $_SESSION['username'] = $data['username'];
            $_SESSION['is_logged_in'] = true;
            header('location: index.php?page=user/list');
            exit;
        } else {
            $error = 'Password salah.';
        }
    } else {
        $error = 'Username tidak ditemukan.';
    }
}
?>

<div class="container" style="max-width: 400px; margin-top: 50px;">
    <h2>Login Sistem</h2>
    
    <?php if($error): ?>
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            <?= $error; ?>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="input">
            <label style="width: 100px;">Username</label>
            <input type="text" name="username" required placeholder="admin">
        </div>
        <div class="input">
            <label style="width: 100px;">Password</label>
            <input type="password" name="password" required placeholder="admin123">
        </div>
        <div class="submit" style="padding-left: 0; text-align: right;">
            <input type="submit" name="submit" value="Login" style="width: 100%;">
        </div>
    </form>

</div>
