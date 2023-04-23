<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Page</title>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>SN:No</th>
                <th>Task Name</th>
                <th>Task Description</th>
            </tr>  
        <from action="/listlogic" method="post">
            <?php foreach($OBJDatas as $alldatasFromDB): ?>
                <tr>
                    <td><?php echo $alldatasFromDB->id ?></td>
                    <td><?php echo $alldatasFromDB->taskname ?></td>
                    <td><?php echo $alldatasFromDB->contents ?></td>
                    <td>
                        <form>
                            <input hidden value = "<?php $alldatasFromDB->id ?>" name = "deleteTarID"/>
                            <button>Delete</button>
                        </form>
                    </td>
                    <td>
                    <form>
                        <input hidden value = "<?php $alldatasFromDB->id ?>" name = "editTarId"/>
                        <button>Edit</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </from>
    </div>
    </table>
</body>
</html>