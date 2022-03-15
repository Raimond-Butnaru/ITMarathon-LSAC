<?php
$mailto = 'lsaciasi@gmail.com' ;
$subject = "New message from Your Website" ;
$formurl = "continutcontact.php" ;

// -------------------- END OF CONFIGURABLE SECTION ---------------
if(isset($_POST['name']))
{
  $name=$_POST['name'];
}
if(isset($_POST['email']))
{
  $email=$_POST['email'];
}
if(isset($_POST['subject']))
{
  $subject=$_POST['subject'];
}
if(isset($_POST['comments']))
{
  $comments=$_POST['comments'];
}
if(isset($_POST['spam']))
{
  $spam=$_POST['spam'];
}

$http_referrer = getenv( "HTTP_REFERER" );


if(isset($_POST['submit']))
{
  if (!isset($name) || trim($name) == '' || !isset($email) || trim($email) == '' || !isset($subject) || trim($subject) == '' || !isset($comments) || trim($comments) == '' || $spam!="7")
    {
      echo "<h1 align=\"center\">Nu ati completat toate campurile!</h1>";
    }
    else
    {
      //if (!isset($_POST['email'])) {
  //header( "Location: $formurl" );
      
      $name = strtok( $name, "\r\n" );
      $email = strtok( $email, "\r\n" );
      $subject = strtok( $subject, "\r\n" );
      if (get_magic_quotes_gpc()) 
      {
        $comments = stripslashes( $comments );
      }

      $messageproper =

        "---------- IT Marathon message ----------\n\n" . "\nTrimis de : " . $name . "\nEmail : " . $email . "\nSubiect : " . $subject . "\n\n\nMesaj : " . $comments;

      mail($mailto, $subject, $messageproper, "From: \"$name\" <$email>\r\nReply-To: \"$name\" <$email>\r\nX-Mailer: chfeedback.php 2.04" );

      echo "<h1 align=\"center\">Email trimis cu succes de catre $email</h1>";
     }   
}
?>

<section class="about-faq sec-padd">
    
    <link href="css/contact.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>


    <!--Contact form start-->
    <div align="center">
    <section id="contact" >
        <h1>Contacteaza-ne!</h1>
        <p>Daca ai vreo intrebare sau vrei sa ne transmiti ceva, nu ezita sa o faci!</p><br>
              <form action="contact.php" method="post" class="cform-form">
                    <p><input type="text" name="name" placeholder="Numele*" class="cform-text" size="40" title="Numele"></p>
                    <br>
                    <p><input type="text" name="email" placeholder="Email-ul tau*" class="cform-text" size="40" title="Email-ul tau"></p>
                    <br>
                    <p><input type="text" name="subject" placeholder="Subiect*" class="cform-text" size="40" title="Subiect"></p>
                    <br>
                    <p><input type="text" name="spam" placeholder="Anti-spam* : 4+3=?" class="cform-text" size="40" title="Introdu codul"></p>
                    <br>
                    <p><textarea name="comments" cols="40" rows="10" title="Scrie-ne un mesaj" placeholder="Mesajul tau"></textarea></p>
                    <br>
                   <p><input type="submit" value="Trimite mesaj" name="submit"></p>
              </form>
    </section>
  </div>
  <!--Contact form end-->

</section>

