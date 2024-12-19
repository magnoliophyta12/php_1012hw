<section>
    <h2>Sign Up</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
    </form>
</section>


<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    setcookie('username', $username, time() + (86400 * 30), '/');
    setcookie('password', $password, time() +  (86400 * 30), '/');

    echo "<section>Success! You can now <a href='index.php?page=2'>sign in</a></section>.";
}
?>
