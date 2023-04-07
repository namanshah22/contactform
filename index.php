<?php
$name=$email=$gender=$message="";
$nameErr =$emailErr=$genderErr=$messageErr="";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .error{
                color:red;
            }
        </style>
    </head>
    <body>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["name"])){
                    $nameErr= "Name field is required";
                }else{
                    $name=$_POST["name"];
                }
                if(empty($_POST["email"])){
                    $emailErr= "Email field is required";
                }else{
                    $email=$_POST["email"];
                }
                if(empty($_POST["gender"])){
                    $genderErr= "Gender field is required";
                }else{
                    $gender=$_POST["gender"];
                }
                if(empty($_POST["message"])){
                    $messageErr= "Message field is required";
                }else{
                    $message=$_POST["message"];
                }

            }
        ?>    
       <form action=""method="POST">
        <h1>CONTACT US</h1>
        <p class="error">Fields with * are important</p>
        <input type="text"name="name" placeholder="enter your name"><span 
        class="error">*<?php echo $nameErr ?></span><br><br>
        <input type="email"name="email" placeholder="enter your email"><span 
        class="error">*<?php echo $emailErr ?></span><br><br>

        <label for "gender">Gender</label>
        <label for"male">
            <input type="radio" name="gender" id="male" value="male">
            Male
        </label>
        <label for"female">
            <input type="radio" name="gender" id="female" value="female">
            Female
        </label><span class="error">*<?php echo $genderErr ?></span><br><br>
        <textarea name="message" id="" cols="30" rows="10"></textarea><span 
        class="error">*<?php echo $messageErr ?></span><br><br>
        <input type="submit" value="submit">

        
       </form>
       <?php
           echo "<h2>The final output of your message is below</h2>\n";
           echo $name;
           echo "<br>";
           echo $email;
           echo "<br>";
           echo $gender;
           echo "<br>";
           echo $message;
        ?>      
    </body>
</html>