<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log InPage</title>
</head>
<body>
    <div class="container">
        <form action="loginLogic" method="post">
            <?php if(isset($_SESSION['userAlready'])):?>
            <?php echo $_SESSION['userAlready'] ?>
            <?php endif; ?>
            <label>Email</label>
            <input type="email" name="checkMail" placeholder="mail@gmail.com"/>
            <label>Password</label>
            <input type="text" name="checkPassd" />
            <button name="submit">Log In</button>
        </form>
    </div>
</body>
</html>