<!DOCTYPE HTML>
<html>
<head>
	<style>
	.error {color: #FF0000;}
	</style>
</head>
<body>

<?php
// define variables and set to empty values
$userNameErr = $emailErr = $passwordErr = $repeat_passwordErr = $first_nameErr= $last_nameErr=$phoneErr=$streetErr=$cityErr=$stateErr=$zipcodeErr=$countryErr=$memberErr="";
$userName = $email = $password = $repeat_password = $first_name= $last_name=$phone=$street=$city=$state=$zipcode=$country=$member="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["userName"])) {
    			$userNameErr = "Name is required";
  } 

  else {
    $userName = test_input($_POST["userName"]);
    

    // check if name only contains letters and whitespace
    
   if (!preg_match("/^[a-zA-Z ]*$/",$userName)) {
      $userNameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }

  else {
    $email = test_input($_POST["email"]);
    echo $email;
    echo "<br>";
    

    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


  if (empty($_POST["phone"])) {
    $phoneErr = "phone is required";
  }

  else {
    $phone = test_input($_POST["phone"]);
    // check if phone number  contains only + and integers
  
    if (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)){
      $phoneErr = "not acceptable phone number";
    }
  }
  
  if (empty($_POST["zipcode"])) {
    $zipcodeErr = "zipcode is required";
  } 

  else {
    $zipcode = test_input($_POST["zipcode"]);
    // check if zipcode contains only numbers
    

    if (preg_match('#[^0-9\+\-\040/]#', $zipcode)){
      $zipcodeErr = " zipcode is a number";
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } 

  else {
    $password = test_input($_POST["password"]);
  }

   if (empty($_POST["repeat_password"])) {
     $repeat_passwordErr = "repeat_password is required";

   } 

   else {
  $repeat_password = test_input($_POST["repeat_password"]);

     if ($_POST["password"] != $_POST["repeat_password"]) {
     $repeat_passwordErr = " password does not matched";
  }
  }

  if (empty($_POST["first_name"])) {
    $first_nameErr = "first_name is required";
  } 

  else {
    $first_name = test_input($_POST["first_name"]);
  }

  if (empty($_POST["last_name"])) {
    $last_nameErr = "last_name is required";
  } 

  else {
    $last_name = test_input($_POST["last_name"]);
  }


  if (empty($_POST["street"])) {
    $streetErr = "street is required";
  } 

  else {
    $street = test_input($_POST["street"]);
  }


  if (empty($_POST["city"])) {
    $cityErr = "city is required";
  }

   else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["state"])) {
    $stateErr = "street is required";
  } else {
    $state = test_input($_POST["state"]);
  }

  if (empty($_POST["country"])) {
    $countryErr = "country is required";
  } 

  else {
    $country = test_input($_POST["country"]);
  }

if (empty($_POST["member"])) {
    $memberErr = "member is required";
  } 

  else {
    $member = test_input($_POST["member"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> REGISTRATION </h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  
  userName: <input type="text" name="userName" value="<?php echo $userName;?>">
  <span class="error">* <?php echo $userNameErr;?></span>
  <br><br>
  
  email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  
  repeat_password: <input type="password" name="repeat_password" value="<?php echo $repeat_password;?>">
  <span class="error">* <?php echo $repeat_passwordErr;?></span>
  <br><br>
  
  first_name: <input type="text" name="first_name" value="<?php echo $first_name;?>">
  <span class="error">* <?php echo $first_nameErr;?></span>
  <br><br>
  
  last_name: <input type="text" name="last_name" value="<?php echo $last_name;?>">
  <span class="error">* <?php echo $last_nameErr;?></span>
  <br><br>
  
  phone: <input type="int" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  
  street: <input type="text" name="street" value="<?php echo $street;?>">
  <span class="error">* <?php echo $streetErr;?></span>
  <br><br>
  
  city: <input type="text" name="city" value="<?php echo $city;?>">
  <span class="error">* <?php echo $cityErr;?></span>
  <br><br>
  
  state: <input type="text" name="state" value="<?php echo $state;?>">
  <span class="error">* <?php echo $stateErr;?></span>
  <br><br>
  
  zipcode: <input type="int" name="zipcode" value="<?php echo $zipcode;?>">
  <span class="error">* <?php echo $zipcodeErr;?></span>
  <br><br>
  
  country: <input type="text" name="country" value="<?php echo $country;?>">
  <span class="error">* <?php echo $countryErr;?></span>
  <br><br>

  Membership_level:
  <input type="radio" name="member" <?php if (isset($member) && $member=="member") echo "checked";?> value="free">free
  <span class="error">* <?php echo $memberErr;?></span>
  <br><br>
  <input type="submit" name="register" value="register">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $userName;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $repeat_password;
echo "<br>";
echo $phone;
echo "<br>";
echo $zipcode;
echo "<br>";
echo $member;
?>

</body>
</html>