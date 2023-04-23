<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <form action="/homelogic" method="post">
            <h3><?php echo $_SESSION['login']['username'] ?></h3>
            <label>Task Name</label>
            <input type="text" name="taskname" placeholder = "taskName">
            <label>Task Description</label>
            <textarea name="content"></textarea>
            <button>Add Task</button>
        </form>
        <form action = "/logout" method = "post">
            <button>Log Out</button>
        </form>
    </div>
</body>
</html>