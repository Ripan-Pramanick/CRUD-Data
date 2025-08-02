<?php
include("db.php");
if (isset($_GET['Id']) && !empty($_GET['Id'])) {
    $id = $_GET['Id'];
    $select = "SELECT * FROM `student` WHERE Id = $id";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);

    if (isset($_POST["update_btn"])) {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $phoneno = $_POST["phone"];

        $query = "UPDATE `student` SET `Name`='$name', `Age`='$age', `Phone`='$phoneno' WHERE Id = $id";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "Data Updated Successfully";
            header("Location: view.php");
        } else {
            echo "Data Update Unsuccessfully";
        }
    } else {
        echo "Form not submitted properly.";
    }
} else {
    die("Error: A valid student ID is required.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>

<body>
    <h2>Update Student Information</h2>
    <?php if ($message): ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>
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