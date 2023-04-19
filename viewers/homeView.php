<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <form action="/homelogic" method="post">
            <label>Task Name</label>
            <input type="text" name="taskname" placeholder = "taskName">
            <label>Task Description</label>
            <textarea name="content"></textarea>
            <button>Add Task</button>
        </form>
    </div>
</body>
</html>