<!DOCTYPE html>
<html>
<head>
    <title>PHP Code</title>
</head>
<body>

<h1>Welcome to Registration</h1>

<?php
$name = $age = $email = $dob = $gender = $bloodgroup = "";
$degree = [];

$nameerror = $ageerror = $emailerror = $doberror = $gendererror = $degreeerror = $blooderror = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name validation
    if (empty($_POST["name"])) {
        $nameerror = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerror = "Only letters and spaces allowed";
        } elseif (str_word_count($name) < 2) {
            $nameerror = "At least two words required";
        }
    }

    // Age validation
    if (empty($_POST["age"])) {
        $ageerror = "Age is required";
    } else {
        $age = test_input($_POST["age"]);
        if (!is_numeric($age) || $age < 1 || $age > 150) {
            $ageerror = "Invalid age";
        }
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailerror = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";
        }
    }

    // DOB validation
    if (empty($_POST["dob"])) {
        $doberror = "Date of Birth is required";
    } else {
        $dob = $_POST["dob"];
    }

    // Gender validation
    if (empty($_POST["gender"])) {
        $gendererror = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }

    // Degree validation
    if (empty($_POST["degree"])) {
        $degreeerror = "Select at least one degree";
    } else {
        $degree = $_POST["degree"];
    }

    // Blood group validation
    if ($_POST["bloodgroup"] == "") {
        $blooderror = "Blood group required";
    } else {
        $bloodgroup = $_POST["bloodgroup"];
    }
}

function test_input($data) {
    return trim($data);
}
?>

<form method="post">

Name:
<input type="text" name="name" value="<?php echo $name; ?>">
<?php echo $nameerror; ?><br><br>

Age:
<input type="number" name="age" value="<?php echo $age; ?>">
<?php echo $ageerror; ?><br><br>

Email:
<input type="email" name="email" value="<?php echo $email; ?>">
<?php echo $emailerror; ?><br><br>

Date of Birth:
<input type="date" name="dob">
<?php echo $doberror; ?><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
<?php echo $gendererror; ?><br><br>

Degree:
<input type="checkbox" name="degree[]" value="HSC"> HSC
<input type="checkbox" name="degree[]" value="BSc"> BSc
<input type="checkbox" name="degree[]" value="MSc"> MSc
<?php echo $degreeerror; ?><br><br>

Blood Group:
<select name="bloodgroup">
    <option value="">Select</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
</select>
<?php echo $blooderror; ?><br><br>

<input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    empty($nameerror) && empty($ageerror) && empty($emailerror) &&
    empty($doberror) && empty($gendererror) && empty($degreeerror) && empty($blooderror)) {

    echo "<h3>Your Input:</h3>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Email: $email <br>";
    echo "DOB: $dob <br>";
    echo "Gender: $gender <br>";
    echo "Degree: " . implode(", ", $degree) . "<br>";
    echo "Blood Group: $bloodgroup <br>";
}
?>

</body>
</html>
