<?php
include("db.php");

if(isset($_POST["submit_btn"])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phoneno = $_POST["phone"];

    $query = "INSERT INTO `student` (`Id`, `Name`, `Age`, `Phone`) VALUES (Null, '$name', '$age', '$phoneno')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "Data Insert Unsuccessfully";
    }
}else{
    echo "Form not submitted properly.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iNSERT DATA</title>
</head>
<body>
    <form action="" method="post">
    <label for="Name">Name: </label>
    <input type="text" name="name" id="Name" required>
    <br>
    <label for="Age">Age: </label>
    <input type="number" name="age" id="Age" required>

    <br>
    <label for="Phone">Phone</label>
    <input type="number" name="phone" id="Phone" required>
    <br>
    <button type="submit" name="submit_btn" value="save">Submit</button>

    </form>
</body>
</html>