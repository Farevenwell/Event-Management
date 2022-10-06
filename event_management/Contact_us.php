<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
	
    
		
        
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
	
    <nav>
      <label class="logo">EMSE</label>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
		<li><a href="Register.php">Register</a></li>
       


      </ul>
    </nav>
    <section></section>
  </body>
</html>

</head>
<body>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<style>
        .btn input[type="submit"] {
            height: 50px;
            width: 200px;
            color: #fff;
            font-size: 17px;
            background: #0082e6;;
            cursor: pointer;
            border-radius: 25px;
            border: none;
            outline: none;
            margin-top: -1%;
            margin-left: 32%;


        }
    </style>
    
<div class="wrapper">
        <div class="contact-form">
            <form action="" method="POST">
            <div class="title">Contact Us</div>

            <div class="input-fields">
                    <div class="items">
                        <label for="name1" class="label">name</label>
                        <input name="name" type="text" class="input" required>
                    </div>
                    <div class="items">
                        <label for="email1" class="label">email</label>
                        <input name="email" type="email" class="input" required>
                    </div>
                    <div class="items">
                        <label for="subject1" class="label">subject</label>  
                        <input name="subject" type="text" class="input" placeholder="(Optional)">
                    </div>
                    <div class="items">
                        <label for="msg1" class="label">message</label>
                        <textarea name="msg" class="text-area" required></textarea>
                    </div>
            </div>
                
            <div class="btn">
                <input type="submit" name="send" value="SEND">
            </div>
        </div>
        </form>
</div>  

	
</body>
</html>

<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "event_management";

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect->error);
}
if(isset($_POST['send']))
     {

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$randomnum = substr(str_shuffle("1234567890"), 0, 6);
$random =  200 . $randomnum;


$sql = "INSERT INTO `messages` (`message_ID`,`name`,`email`,`subject`,`message`)
       VALUES('$random','$name','$email', '$subject', '$msg')";

if($conn->query($sql) === TRUE){
    echo '<script> alert("Message sent.") </script>';
} else{
    echo '<script> alert("Failed.") </script>';
}
}

$conn->close();
?>






