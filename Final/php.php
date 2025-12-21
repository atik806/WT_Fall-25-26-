<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
<body>
<h1> Welcome to Registration</h1>
 
<?php
$name = "";
$age = "";
$email = "";
$dob = "";
$gender = "";
$nameerror = "";
$ageerror = "";
$emailerror = "";
$doberror = "";
$gendererror = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //name validation
    if (empty($_POST["name"])) {
        $nameerror = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerror = "Only letters and white space allowed<br>";
        } 
        
        elseif (str_word_count($name) < 2) {
            $nameerror = "Name must contain at least two words";
        }
    }

    // age validation
    if (empty($_POST["age"])) {
        $ageerror = "Age is required";
    } else {
        $age = test_input($_POST["age"]);
        if (!is_numeric($age)) {
            $ageerror = "Only numbers are allowed";
        } elseif ($age < 1 || $age > 150) { 
            $ageerror = "Age must be between 1 and 150";
        }
    }

    //email validation
    if(empty($_POST["email"])){
        $emailerror = "Cannot be empty";
    }else{
        $email =preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST["email"]);
        if(!$email){
            $emailerror = "Invalid email format";
        }

    }
    // date of birth validation
    if(empty($_POST["dob"])){
        $doberror = "Date of Birth is required";
    }else{
        $dob = test_input($_POST["dob"]);
    }

    //gender validation
    if(empty($_POST["gender"])){
        $gendererror = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);     
    }
}

function test_input($data) {
    return trim($data);
}
?>

 
<form method="post" action="">
Name: 
<input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?>
<br><br>

Age: 
<input type="number" name="age" value="<?php echo $age;?>">
<?php echo $ageerror; ?>

<br><br>

Email: 

<input type="email" name="email" value="<?php echo $email;?>">
<?php echo $emailerror; ?>

<br><br>

Date of Birth:
<input type="date" name="dob" value="<?php echo date('Y-m-d'); ?>">
<?php echo $doberror; ?><br><br>

<br><br>

Gender:
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other
<br><br>



Degree: 
<input type="checkbox" name="degree" value="HSC"> HSC
<input type="checkbox" name="degree" value="BSc"> BSc
<input type="checkbox" name="degree" value="MSc"> MSc

   
<br><br>

Blood Group:
<select name="bloodgroup">
    <option value="-----------------">-------------------------</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select>
<br><br>
<input type="submit" name="submit" value="Submit">
<?php   


if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
echo "Age: ".$age. "<br>";
echo "Email: ".$email. "<br>";
echo "Date of Birth: ".$dob. "<br>";
}
?>
 
 
</body>
</form>
</html>