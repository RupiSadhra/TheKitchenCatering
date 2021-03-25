<?php
// include './connection.php';
if(isset($_GET['submit']))
{
   $name=htmlspecialchars($_GET['name']);
   $email=htmlspecialchars($_GET['email']);
   $message=htmlspecialchars($_GET['message']);

   if(empty($name)||empty($email)||empty($message))
   {
       echo "Fill all the fields";
   }

   else
   {
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "Enter valid name";
      }
      else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter valid email";
      }

      else
      {
        require_once('./phpmailer/PHPMailerAutoload.php');
        $mail=new PHPMailer();
        
        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        
        $mail->Username="varinderjit17@gmail.com";
        $mail->Password="MANvir786@";
        
        $mail->setFrom('varinderjit17@gmail.com','TheKitchenCatering');
        $mail->addAddress($email);
        $mail->addReplyTo('varinderjit17@gmail.com');
        
        $mail->isHTML(true);
        $mail->Subject="Confirmation email";
        $mail->Body="<h1>Confirmation email from The Kitchen Catering<h1>";
        
        
        if(!$mail->send())
        {
            echo "Message could not be sent";
        }
        
        else
        {
            echo "Message sent";
        }

        $mail2=new PHPMailer();
        
        $mail2->Host="smtp.gmail.com";
        $mail2->Port=587;
        $mail2->SMTPAuth=true;
        $mail2->SMTPSecure='tls';
        $mail2->isSMTP();
        $mail2->SMTPDebug = 2;
        
        $mail2->Username="varinderjit17@gmail.com";
        $mail2->Password="MANvir786@";
        
        $mail2->setFrom('varinderjit17@gmail.com','TheKitchenCatering');
        $mail2->addAddress('varinderjit17@gmail.com');
        $mail2->addReplyTo('varinderjit17@gmail.com');
        
        $mail2->isHTML(true);
        $mail2->Subject="Client enquiry";
        $mail2->Body="<p>Name:".$name."</p><br><p>Email:".$email."</p><br><p>Message:".$message."</p><br>";
        if(!$mail2->send())
        {
            echo "Message could not be sent";
        }
        
        else
        {
            echo "Message sent";
        }
        
        //   $name=mysqli_real_escape_string($conn,$name);
        //   $email=mysqli_real_escape_string($conn,$email);
        //   $message=mysqli_real_escape_string($conn,$message);

        //   $query="insert into users(name,email,message) values('$name','$email','$message')";
          
        //   if(mysqli_query($conn,$query))
        //   {
            // require_once('./phpmailer/PHPMailerAutoload.php');
            // include('./phpmailer/class.phpmailer.php');
            //         $mail=new PHPMailer();

            //         // $mail->SMTPDebug = 2;
            //         $mail->CharSet =  "utf-8";
                   
            //         $mail->Host = "mail.kitchencatering.co.nz";
            //         $mail->Port=587;
            //         $mail->SMTPAuth=true;
            //         $mail->SMTPSecure='tls';
            //         $mail->isSMTP();

            //         $mail->Username="info@kitchencatering.co.nz";
            //         $mail->Password="sadhra786";

            //         $mail->setFrom('info@kitchencatering.co.nz','TheKitchenCatering');
            //         $mail->addAddress($email);
            //         $mail->addReplyTo('info@kitchencatering.co.nz');

            //         $mail->isHTML(true);
            //         $mail->Subject="Confirmation email";
            //         $mail->Body="<h2 style='text-align='center';'>Confirmation email</h2></br>
            //         <p>Your message has been received. One of our team members will contact you shortly.</br></br>Thank you for contacting us.</p>";

                 

            //         if(!$mail->send())
            //         {
            //             echo "Message could not be sent!";
            //             echo $mail->ErrorInfo;
            //         }

            //         else
            //         {
            //             echo "Message sent successfully!";
            //         }

            //         $mail->Subject="Client enquiry";
            //         $mail->Body="Name:$name<br> Email: $email<br>Message: $message";
            //         $mail->addAddress("info@kitchencatering.co.nz");
                    
             
                 
        //   }

        //   else
        //   {
        //       echo "failed to add record";
        //   }
       

      }
   }
}

else
{
    echo"error";
}


?>