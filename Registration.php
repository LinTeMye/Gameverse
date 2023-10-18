<?php
session_start();
include("admin/confs/Connection.php");

$unameErr=$pwdErr=$emErr=$phErr=$genErr=$cityErr="";  
if ( $_SERVER['REQUEST_METHOD']=="POST")
{
    $_SESSION['auth']=$username;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    
    $username=validDate($username);
    $password=validDate($password);
    $email=validDate($email);
    $phone=validDate($phone);
    $gender=validDate($gender);
    $city=validDate($city);
    
    
    if (empty($username))
    {
        $unameErr="Username is required";   //name=""
    }
    if (empty($password))
    {
        $pwdErr="Password is required"; //password=""
    }
    if (!empty($password))
    {
        $pwdCount=strlen($password);
        if($pwdCount<8)
            $pwdErr="Password must be at least 8 characters";
    }
    
    if (empty($email))
    {
        $emErr="Email is required";       //email=""
    }
    if (!empty($email))
    {
        If( !filter_var($email,FILTER_VALIDATE_EMAIL))     //Check if $email is a valid email address
        $emErr="email format is not valid";
    }
    if (empty($phone))
    {
        $phErr="Phone Number is required";     //phone=""
    }
    if (empty($gender))
    {
        $genErr="Gender is required";   //Gender=""
    }
    if (empty($city))
    {
        $cityErr="City is required";     //name=""
    }
    if(empty($unameErr) && empty($pwdErr) && empty($emErr) && empty($phoneErr) && empty($genErr) && empty($cityErr))
    {
        try{
            $pwd_hash = password_hash($password, PASSWORD_BCRYPT);
            echo "password hash. ".$pwd_hash;
            $stmt = $conn->prepare("insert into user (username,password,email,phone,gender,city) values (?,?,?,?,?,?)");
            $stmt->execute([$username,$pwd_hash,$email,$phone,$gender,$city]);
            $rcount = $stmt->rowCount();//
            
            if ($rcount == 1){
                echo "inserted successfully";
                header("location:index.php");
            }
            else echo "insert failure";
            
        }catch(PDOException $e)
        {
            echo $e->getMessage()." error code ". $e->getCode();
        }
    }
    
}
function validDate($data)
{
    $data= trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);//change from special character < > to &lt; &gt;
    return $data;
}

?>
<html>
	<head>
	<title>Welcome to Mobile Phone Shop</title>
	</head>
	<body>
    <center>    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <fieldset><legend>Gameverse account registration Form</legend>
                <span style="color:red"> <?php if(isset($unameErr))echo $unameErr;?></span><br>
            <span style="color:red"> <?php if(isset($unameErr))echo $unameErr;?></span><br>
                    User Name <input type="text" name="username"  placeholder="enter username" required autofocus><br>
                <span style="color:red"><?php  if(isset($pwdErr))echo $pwdErr;?></span><br>
                    Password <input type="password" name="password"  placeholder="enter password" required ><br>
                <span style="color:red"><?php if(isset($emErr))echo $emErr;?></span><br>
                    Email <input type="email" name="email"  placeholder="enter email" required ><br>
                <span style="color:red"><?php if(isset($phErr))echo $phErr;?></span><br>
                    Phone <input type="tel" name="phone"  placeholder="enter phone" required ><br>
                <span style="color:red"><?php if(isset($genErr))echo $genErr;?></span><br>
                    gender female <input type="radio" name="gender"  value="F"> Male <input type= "radio" name="gender" value="M"> 
                <span style="color:red"><?php if(isset($cityErr))echo $cityErr;?></span><br>
                <br>City
                <select name="city">
                    <option>select City </option>
                    <option value="Yangon">Yangon</option>
                    <option value="Mandalay">Mandalay</option>
                    <option value="Magway">Magway</option>
                    <option value="Pegu">Pegu</option>
				</select>
			<br><br>
			<input type="submit" value="Register"></fieldset>
	
	
	<a href="login1.php">Already member?</a>
	</form></center>
	</body>
</html>