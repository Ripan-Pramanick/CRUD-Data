<?php
include("db.php");

    $id = $_GET['Id'];
    $sql = "SELECT * FROM `student` WHERE Id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_array();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>

<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['Id']); ?>">
        <label for="Name">Name: </label>
        <input value="<?php echo htmlspecialchars($row['Name']); ?>" type="text" name="name" id="Name" required>
        <br><br>
        <label for="Age">Age: </label>
        <input value="<?php echo htmlspecialchars($row['Age']); ?>" type="number" name="age" id="Age" required>
        <br><br>
        <label for="Phone">Phone: </label>
        <input type="text" value="<?php echo htmlspecialchars($row['Phone']); ?>" name="phone" id="Phone" required>
        <br><br>
        <button type="submit" name="update_btn" value="update">Update</button>
        <button><a href="view.php" style="text-decoration: none; color: inherit;">Back</a></button>
    </form>
</body>

</html>