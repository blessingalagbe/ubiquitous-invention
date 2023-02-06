<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname="test";
//mysql_connect()
$con=mysqli_connect($server,$username,$password,$dbname);
if (isset($_POST['test'])) {
    if (!isset($_POST['firstname']) || (!isset($_POST['lastname'])) || (!isset($_POST['gender']))) {
        echo "<script> alert('please fill all fields')</script>";

    } else {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];

        $query = "insert into users (firstname,lastname,gender) VALUES('$firstname','$lastname','$gender')";
        $push = mysqli_query($con, $query); //submit data to db

        if ($push) {
            echo "<script> alert('data submitted successfully') </script>";
        } else {
            echo "<script> alert('data submission failed') </script>";
        }
    }
  }
?>

<html>
    <form method="post" action="">
        <p><input name="firstname" placeholder="input your firstname" type="text" /> </p>
        <p><input name="lastname" placeholder="input your lastname" type="text" /> </p>
        <p>Gender: <input name="gender" type="radio" value="male" /> Male
        <input name="gender" type="radio" value="female" /> Female </p>
        <input type="submit" name="test" value="validate" />
</form>

</html>
