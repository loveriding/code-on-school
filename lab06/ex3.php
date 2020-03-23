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
$nameErr = $genderErr = $broweErr = $childrenErr = "";
$name = $email = $gender = $brower = $children = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }


  if (empty($_POST["brower"])) {
    $broweErr = "Brower is required";
  } else {
    $brower = $_POST["brower"];
  }
  if (empty($_POST["children"])) {
    $children = "0";
  } else {
    $children = $_POST["children"];
  }
}

?>
<form method="post" >  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">*</span>
  <br><br>
  Gender:
  <span class="error">*</span> <br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female <br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male <br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other <br>
  Brower:<span class="error">*</span><br>
  <input type="radio" name="brower" <?php if (isset($brower) && $brower=="explorer") echo "checked";?> value="explorer">Internet Explorer <br>
  <input type="radio" name="brower" <?php if (isset($brower) && $brower=="firefox") echo "checked";?> value="firefox">Firefox <br>
  <input type="radio" name="brower" <?php if (isset($brower) && $brower=="chrome") echo "checked";?> value="chrome">Chrome <br>
  
   How many children do you have ?<span class="error">*</span><br>
  <select id="children" name="children">
    <option value="0">None</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $gender;
echo "<br>";
echo $brower;
echo "<br>";
echo $children;
?>
</body>
</html>