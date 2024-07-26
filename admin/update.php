<?php

include "connection.php";
error_reporting(0);

$dn = $_GET["dname"];
$dno = $_GET["dnumber"];
$dm = $_GET["dmail"];
$da = $_GET["dage"];
$dg = $_GET["dgender"];
$bg = $_GET["dgroup"];
$dadd = $_GET["daddress"];
$did = $_GET['id']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Information</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 140vh;
            background-color: #1f3d4e;
        }
        form {
            background-color: #fff4d3;
            padding: 100px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 12px;
        }
        input[type="submit"] {
            background-color: #404b28;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="_GET">


        <label for="donor_name">Donor Name:</label>
        <input type="text" value="<?php echo "$dn"; ?>" id="dn" name="donor_name" required>

        <label for="donor_number">Donor Number:</label>
        <input type="text" value="<?php echo "$dno"; ?>" id="dno" name="donor_number" required>

        <label for="donor_mail">Donor Mail:</label>
        <input type="text" value="<?php echo "$dm"; ?>" id="dm" name="donor_mail" required>

        <label for="donor_age">Donor Age:</label>
        <input type="text" value="<?php echo "$da"; ?>" id="da" name="donor_age" required>

        <label for="donor_gender">Donor Gender:</label>
        <input type="text" value="<?php echo "$dg"; ?>" id="dg" name="donor_gender" required>

        <label for="donor_bloodgroup">Donor Bloodgroup:</label>
        <input type="text" value="<?php echo "$bg"; ?>" id="bg" name="blood_group" required>

        <label for="donor_address">Donor Address:</label>
        <input type="text" value="<?php echo "$dadd"; ?>" id="dadd" name="donor_address" required>

        <label for="donor_id">Donor id (You cannot change ID): </label>
        <input type="text" value="<?php echo "$did"; ?>" id="dn" name="donor_id" required>



        <input type="submit" name="button" value="UPDATE">

        </form>
<?php
if(isset($_GET['button']))
{

    $name = $_GET['donor_name'];
    $number = $_GET['donor_number'];
    $mail = $_GET['donor_mail'];
    $age = $_GET['donor_age'];
    $gender = $_GET['donor_gender'];
    $group = $_GET['blood_group'];
    $address = $_GET['donor_address'];
    $id = $_GET['donor_id'];

   $ed = "UPDATE donor_details SET donor_name='$name',donor_number='$number',donor_mail='$mail',donor_age='$age',donor_gender='$gender',donor_blood='$group',donor_address='$address' WHERE donor_id='$id' ";
    $connection=mysqli_connect("localhost","root","","blood_donation");
    $result=mysqli_query($connection,$ed);



    if($result)
    {
        echo 'done <a href=home.php /a>';
    }
    else
    {
        echo 'fail gdsfgsdfgsd';
    }



}
else{
    echo "<font color='red'> Click on Submit,<br> If you are done.";

}
?>


</body>
</html>




