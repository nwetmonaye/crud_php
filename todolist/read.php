<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tasks List:</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("./db_connection.php");
            $sql = " SELECT * FROM work " ;
            $query = mysqli_query($connection,$sql);

            $totalRow = mysqli_num_rows($query);
            while($row = mysqli_fetch_assoc($query)){
                $time = date('g:i:a',strtotime($row['created_date']));
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>$time</td>
                    <td>
                        <a href='#'>Update</a> |
                        <a href='#'>Delete</a>
                    </td>
                 </tr>";
            }
           
            ?>
        </tbody>
    </table>
</body>

</html>