<section>
    <h2>Sign In</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</section>


<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        if ($_COOKIE['username'] === $username && $_COOKIE['password'] === $password) {

            $_SESSION['username'] = $username;

            echo "<section>Login successful! Welcome, {$username}</section>";
        } else {
            echo "<section>Invalid username or password.</section>";
        }
    } else {
        echo "<section>No registered user found. <a href='index.php?page=1'>Sign Up?</a></section>";
    }
}
?>