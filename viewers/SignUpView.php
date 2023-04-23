<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <form action="/signupLogic" method="post">
            <?php if(isset($_SESSION['usersCanHaveAccount'])):?>
            <?php echo $_SESSION['usersCanHaveAccount'] ?>
            <?php endif; ?>
            <label>Name</label>
            <input type="text" name="name" class="name" id="name" />
            <label>Email</label>
            <input type="text" name="email" class="email" id="email"/>
            <label>Password</label>
            <input type="text" name="passwd" class="passwd" id="passwd" />
            <button name="Submit">Sign Up</button>
        </form>
    </div>
</body>
</html>