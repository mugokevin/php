<?php
//define variables and set to empty values
$FirstNameErr = $LastNameErr = $PhoneNumberErr = $genderErr = $DateOfBirthErr = $EmailAddressErr = $PasswordErr = "" ;
$FirstName = $LastName = $PhoneNumber = $gender = $DateOfBirth = $EmailAddress = $Password = "" ;

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if (empty($_POST["FirstName"])) {
        $nameErr = "FirstName is required";
    } else {
        $name = test_input($_POST["FirstName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["LastName"])) {
        $nameErr = "LastName is required";
    } else {
        $name = test_input($_POST["LastName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["PhoneNumber"])) {
    $mobilenoErr = "Mobile no is required";
    } else {
    $mobileno = test_input($_POST["PhoneNumber"]);
    // check if mobile no is well-formed
    if (!preg_match ("/^[0-9]*$/", $mobileno) ) {
        $mobilenoErr = "Only numeric value is allowed.";
    }
    //check mobile no length should not be less and greator than 10
    if (strlen ($mobileno) != 10) {
        $mobilenoErr = "Mobile no must contain 10 digits.";
    }
    }
    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    } else {
    $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["EmailAddress"])) {
    $emailErr = "Email is required";
    } else {
    $email = test_input($_POST["EmailAddress"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    if (empty($_POST["Password"])) {
    $emailErr = "Email is required";
} else {
    $email = test_input($_POST["Password"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid Password";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="">
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" placeholder="first name.."><br><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" placeholder="last name.."><br><br>

    <label for="phone">Phone Number</label><br>
    <input type="tel" id="phone" name="phone" placeholder="0xxx-xxx-xxx"><br><br>

    <p>gender</p><br>
    <label for="Mgender">male</label>
    <input type="radio" id="Mgender" name="gender" value="male">

    <label for="Mgender">female</label>
    <input type="radio" id="Mgender" name="gender" value="female"><br><br>

    <label for="dob">Date Of Birth</label><br>
    <input type="date" id="dob"><br><br>

    <label for="email">Email Address</label><br>
    <input type="text" id="email" placeholder="email.."><br><br>
    <label for="pwd">password</label><br>
    <input type="password" id="pwd" placeholder="password"><br>
    <a href="#">Forgot Password?</a><br> <br>

    <input type="button" value="sign up">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $FirstName;
echo "<br>";
echo $LastName;
echo "<br>";
echo $PhoneNumber;
echo "<br>";
echo $gender;
echo "<br>";
echo $EmailAddress;
echo "<br>";
echo "$Password";
echo "<br>";
?>

</body>
</html>
