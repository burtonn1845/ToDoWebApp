<?php include('connect.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form method="post" action="connect.php">
            <div class="input-group">
                <label>TODO Item: </label>
                <input type="text" name="todoItem" value="<?php echo $toDoItem; ?>"
            </div>
            <div>
                <button type="submit" class="addbtn" name="addToDo">Submit</button>
            </div>
        </form>
        <form method="post" action="connect.php">
            <div class="delete-group">
                <label>Delete: </label>
                <input type="number" name="delItem" value="<?php echo $delItem; ?>"
            </div>
            <div>
                <button type="submit" class="delbtn" name="delDo">Submit</button>
            </div>
        </form>
        
    </body>
</html>
    