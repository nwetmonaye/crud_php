<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Todo list</h1>
    <a href="read.php" style="margin-bottom:20px">List Page</a><br><br>
    <form method="POST">
        <label for="name">Your Tasks</label>
        <input type="text" name="taskName" id="name" placeholder="Enter Your Tasks.." required>
        <button name="addBtn">Add</button>
    </form>
    <?php
    require_once("./db_connection.php");
        if(isset($_POST['addBtn'])){
           $taskName = $_POST['taskName'];
         
            $sql = " INSERT INTO work (name) VALUES ('$taskName') ";
            if(mysqli_query($connection,$sql)){
               header("location:read.php");
            }else{
                echo "Query Fail.." . mysqli_error();
            }
          
        }
    ?>
</body>

</html>