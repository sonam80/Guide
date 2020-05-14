  <div id="sendmessage1"></div>
<?php
$GLOBALS['name']=isset($_REQUEST["name"])?$_REQUEST["name"]:"%";
$GLOBALS['email']=isset($_REQUEST["email"])?$_REQUEST["email"]:"%";
$GLOBALS['subject']=isset($_REQUEST["subject"])?$_REQUEST["subject"]:"%";
$GLOBALS['message']=isset($_REQUEST["message"])?$_REQUEST["message"]:"%";

/*echo $GLOBALS['name'].'</br>';
echo $GLOBALS['email'].'</br>';
$subject=$GLOBALS['subject'].'</br>';
echo $GLOBALS['message'].'</br>';*/
$to="sonam@senena.com";
$sender=$GLOBALS['email'];
//$headers = 'From: sonam@senena.com>' . "\r\n";
//$headers =array("From: $GLOBALS['email']");
//echo$GLOBALS['email'].'</br>';
$headers = 'From:' . $sender;

$name=$GLOBALS['name'];
$email=$GLOBALS['email'];
$subject=$GLOBALS['subject'];
$message=$GLOBALS['message'];

//mail($to,$subject,$message,$headers);

  if(mail($to,$subject,$message,$headers))
      {
     // echo "<script>alert('Mail was sent !');</script>";
     // echo "<script>document.location.href='contact.php'</script>";
      	  echo "Your message has been sent. Thank You!";


      }
      else
      {
      	
      	echo "Your message is not sent";
      	
      //echo "<script>alert('Mail was not sent. Please try again later');</script>";
      }
      ?>





