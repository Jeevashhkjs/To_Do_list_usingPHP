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
            <?php var_dump($OBJDatas) ?>
            <tr>
                <td><?php echo $alldatasFromDB->id ?></td>
                <td><?php echo $alldatasFromDB->taskname ?></td>
                <td><?php echo $alldatasFromDB->contents ?></td>
            </tr> 
        </from>
    </div>
    </table>
</body>
</html>