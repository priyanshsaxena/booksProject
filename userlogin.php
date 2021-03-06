<!DOCTYPE HTML>
<html>
<head><title>User Login</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
.error {color: #FF0000;}

a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    
    display: block;
    width: 220px;
    text-align: center;
    text-decoration: none;
    color: initial;
    margin-left: 527.5px;
}

a.button:hover {
    background: #3d7a80;
    background: -webkit-linear-gradient(top, #3d7a80, #2f5f63);
    background: -moz-linear-gradient(top, #3d7a80, #2f5f63);
    background: -o-linear-gradient(top, #3d7a80, #2f5f63);
    background: -ms-linear-gradient(top, #3d7a80, #2f5f63);
    background: linear-gradient(top, #3d7a80, #2f5f63);
}


form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:230px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #5d2500;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

#submit {
    background-color: #009900;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color: #fff;
    font-family: 'Oswald';
    font-size: 20px;
    text-decoration: none;
    cursor: pointer;
    border:none;
}

#submit:hover {
    border: none;
    background:red;
    box-shadow: 0px 0px 1px #777;
}

</style>
</head>
<body>


<?php

// define variables and set to empty values
$emailErr = $passErr = "";
$email = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email=test_input($_POST["email"]);
    $pass=test_input($_POST["pass"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2><center>User Login</center></h2>
<p><center><span class="error">* required field.</span></center></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

   User Name: <input type="email" name="email" placeholder = "Your iitmandi email" required>
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   
   Password: <input type="password" name="pass" placeholder = "enter password" pattern=".{8,}" maxlength="20" required>
   <span class="error">* <?php echo $passErr;?></span>
   <br><br>
   
   <input type="submit" name="submit" value="Submit" id="submit">
</form>

<?php

if($_POST["email"] and $_POST["email"]!="")
{
    $servername = "localhost";
    $handle = fopen("pass.txt", "r");
    $userinfo = fscanf($handle, "%s\t%s\t%s\n");
    list ($username,$password,$dbname) = $userinfo;
    fclose($handle);

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
    
    session_start();
    $_SESSION['email'] = $_POST['email'];
    
    $sql = "SELECT * FROM users WHERE username = '$email' AND password = MD5('$pass')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<script>alert('Successfully verified')</script>";
            setcookie(user, $email, time() + (100*60), "/");
            echo "<script>window.location = 'user.php'</script>";
        }
    } else {
        echo "<script>alert('Cannot verify user.')</script>";
    }
    $conn->close();
}
?> 

<br><br>
<a href = "home.php" class="button" id="b1"> Back to Home </a>

</body>
</html>
