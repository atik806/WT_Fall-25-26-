<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
<body>
<h1> Welcome to Registration</h1>
 
<?php
$name = "";
$age = "";
$nameerror = "";
$ageerror = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameerror = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerror = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["age"])&& (age>150)) {
        $ageerror = "Age is required and should be less than 150";
    } else {
        $age = test_input($_POST["age"]);
        if (!is_numeric($age)) {
            $ageerror = "Only numbers are allowed";
        }
    }
}

function test_input($data) {
    return trim($data);
}
?>

 
<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?>

Age: <input type="number" name="age" value="<?php echo $age;?>">;
<?php echo $ageerror; ?>
<input type="submit" name="submit" value="Submit">

<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
echo "Age: ".$age. "<br>";
}
?>
 
 
</body>
</form>
</html>