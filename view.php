<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Data</title>
</head>
<body>
    <a href="insert.php">Insert</a>
    <a href="edit.php">Edit</a>
    <a href="delete.php">Delete</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php
        $query = "SELECT * FROM `student`";
        $data = mysqli_query($conn, $query);
        $result = mysqli_num_rows($data);
        if($result){
            while ($row=mysqli_fetch_array( $data )){
                ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Phone']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                </tr>
                <?php
        }
    }else{
            echo "No records found";
        }
        ?>
    </table>
</body>
</html>