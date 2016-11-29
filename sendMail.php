<html>
    <head>
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>
    <body>
        <div>
            <div class = "thanks">
            <h2>Thanks for contacting us</h2>
            <p>we will endeavor to get back to you as soon as possible</p>
            </div>
            <?php 

                if(strlen($_POST['user_name'])>51 || strlen($_POST['user_email'])>51 ||strlen($_POST['user_message'])>1001 ){

                echo "invalid input, try again". strlen($message);
            }
    
    
            else{

                $name = "thier name: \n".htmlspecialchars($_POST['user_name'])."\n\n";

                $email = "thier email: \n".htmlspecialchars($_POST['user_email'])."\n\n";

                $message ="email message: \n". htmlspecialchars($_POST['user_message']);


                $reciever = 'neal.w.hartley@gmail.com';

                mail($reciever, 'FROM WEBSITE', $name.$email.$message);
            }

            ?> 
    
    
    
      
        </div>
        <div class = "return">
            <a href="index.php"> Return to Home Page</a>
        </div>
    </body>
</html>