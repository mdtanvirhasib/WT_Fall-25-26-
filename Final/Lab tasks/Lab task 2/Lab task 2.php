<!DOCTYPE html>
<html>
    <body>


    
<?php

$name= "";
$nameerror= "";
$email = "";
$emailerror = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty ($_POST["name"]))
{
$nameerror="Name can not empty."; 
}
else{
$name= test_input($_POST["name"]); 
if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
{
    $nameerror ="Only letters and white space allowed";
}
}

if (empty($_POST["email"])) {
    $emailerror = "Email cannot be empty.";
}

}
function test_input($data)
{
$data = trim($data); 
return $data;
}
 

?>
        <form method="post" action="">
        <label >NAME</label><br>
        <input type="text" name="name" value="<?php echo $name;?>"><?php echo $nameerror; ?><br><br>

        <label for="">EMAIL</label><br>
        <input type="email"name="email" id="email" value="<?php echo $email; ?>"><br><br>

        <label for="">DATE OF BIRTH</label><br>
        <input type="date"><br><br>

        <label for="">GENDER</label><br>
        <input type="radio" name="1">Male
        <input type="radio" name="1">Female
        <input type="radio" name="1">Other
<br><br>
        <label for="">DEGREE</label><br>
        <input type="checkbox">SSC
        <input type="checkbox">HSC
        <input type="checkbox">BSc
        <input type="checkbox">MSc
        <br><br>

        <label for="">BLOOD GROUP</label><br>
        <SELect><OPtion></OPtion>
    <option value="">A+ve</option>
<option value="">A-ve</option></SELect><br><br>

<input type="submit" name="submit" value="Submit">

</form>



<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror) && empty($emailerror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
 echo "Email: ".$email. "<br>";
}
 
?>
    </body>
</html>
