<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="row">
    <nav class="col-sm-12 col-md-12 col-lg-12">
        <ul>
            <li><a href="index.php?page=1">Sign Up</a></li>
            <li><a href="index.php?page=2">Sign In</a></li>
            <ul>
    </nav>
</div>
<div class="row">
    <?php
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
        if($page==1) include_once("signup.php");
        if($page==2) include_once("signin.php");
    }
    ?>
</div>
</body>
</html>