<?php

$toDoItem = '';
$delItem = '';
$user = 'root';
$pass = '';
$dbname = 'todo';

$db = new mysqli('localhost', $user, $pass, $dbname) or die("Can't connect.");

if($db->connect_error){
    die("connection failed..");
}

$createStmt = "use todo; create table if not exists todolist(id int not null auto_increment, todoItem varchar(100), primary key (id))";
if(mysqli_query($db, $createStmt)){
    echo "failed to create database";
}

$stmt = "select * from todolist";
$result = $db->query($stmt);

if($result->num_rows > 0){
    echo "<table><tr><th>ID</th><th>To Do Item</th></tr>";
    while ($row = $result->fetch_assoc()) {
       echo "<tr><td>" .$row["id"]."</td><td>".$row["todoItem"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "no results";
}

if(isset($_POST['delItem'])){
   $delItem = $_POST['delItem'];
   $query = "delete from todolist where id='$delItem'";
    if (mysqli_query($db, $query))
        {
            header('location: index.php');
        } 
        
}

if(isset($_POST['todoItem'])){
   $toDoItem = $_POST['todoItem'];
   $query = "insert into todolist (todoItem) values('$toDoItem')";
    if (mysqli_query($db, $query))
        {
            header('location: index.php');
        } 
}

?>
