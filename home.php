<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<title>Book Store</title>
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

<h1 style = "text-align:center">Welcome to Book Store !</h1>
<br><br>
<p align=center>Login to access bookstore features.</p>
<br><br><br>

<a href="userlogin.php" title = "Login as Customer" class="button">Login now</a>
<br>
<a href="adminlogin.php" title = "Login as Employee" class="button">I am the admin !</a>
<br>

<br><br><br>

</body>
</html>

