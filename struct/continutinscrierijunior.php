<?php
/*
$servername = "localhost";
$username = "lsaciasi_dino";
$password = "ceamaibunaechipa";
$dbname = "lsaciasi_itmarathon2018";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// -------------------- END OF CONFIGURABLE SECTION ---------------
if(isset($_POST['nume']))
{
  $nume=$_POST['nume'];
}
if(isset($_POST['nrtel']))
{
  $nrtel=$_POST['nrtel'];
}
if(isset($_POST['email']))
{
  $email=$_POST['email'];
}
if(isset($_POST['localitate']))
{
  $localitate=$_POST['localitate'];
}
if(isset($_POST['scoala']))
{
  $scoala=$_POST['scoala'];
}
if(isset($_POST['cazare']))
{
  $cazare=$_POST['cazare'];
}
if(isset($_POST['mesaj']))
{
  $mesaj=$_POST['mesaj'];
}

if(isset($_POST['submit']))
{

	$sql = "INSERT INTO inscrieri(nume, nrtel, email, localitate, scoala, cazare, sectiune, mesaj)
	VALUES ('$nume', '$nrtel', '$email', '$localitate', '$scoala', '$cazare', 'Junior', '$mesaj')";
	
	if ($conn->query($sql) === TRUE)
	{
		echo "<h1 align=\"center\">Te-ai inscris cu succes!</h1>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
*/
?>

<section class="about-faq sec-padd">
 	<link href="css/contact.css" rel="preaload" as="style">   
    <link href="css/contact.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='preload' as="style">	
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    
    <link href="https://www.google.com/recaptcha/api.js?hl=ro" rel="preload" as="script">
	<script src='https://www.google.com/recaptcha/api.js?hl=ro'></script>

    <!--Contact form start
    <div align="center">
    <section id="contact" >
        <h1>Inscrieri Junior Dev!</h1>
              <form action="inscrierijunior.php" method="post" class="cform-form">
					<p><input type="text" name="nume" placeholder="Numele*" required="true" class="cform-text" size="40" title="Numele"></p>
                    <br>
                    <p><input type="text" name="nrtel" placeholder="Numarul de telefon*" required="true" class="cform-text" size="40" title="Numarul de telefon"></p>
                    <br>
                    <p><input type="text" name="email" placeholder="Email*" required="true" class="cform-text" size="40" title="Email-ul tau"></p>
                    <br>
                    <p><input type="text" name="localitate" required="true" placeholder="Orasul in care locuiesti*" class="cform-text" size="40" title="Orasul in care locuiesti"></p>
                    <br>
                    <p><input type="text" name="scoala" required="true" placeholder="Liceul sau facultatea la care sunteti*" class="cform-text" size="40" title="Liceul sau facultatea la care esti"></p>
                    <br>
                    <p><textarea type="text" cols="40" rows="5" required="true" name="cazare" placeholder="Ai nevoie sa iti asiguram cazare? Daca da, pentru ce zile?*" class="cform-text" size="40" title="Ai nevoie sa iti asiguram cazare? Daca da, pentru ce zile?"></textarea></p>
                    <br>
                    <p><textarea name="mesaj" cols="40" rows="5" title="Scrie-ne un mesaj" placeholder="Vrei sa ne lasi un mesaj? Nu ezita"></textarea></p>
                    <br>
					<div class="g-recaptcha" data-sitekey="6LdQhhMUAAAAADFA9YIXzYXtmtkUrQeFeCtedc2n"></div>
					<br>
                   <p><input type="submit" value="Trimitere" name="submit"></p>
              </form>
    </section>
  </div>
  -->
  <!--Contact form end--> 
  <center>
  <div style="align:center">
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScQ_w1WgROkiMVM4eASFJkHhdfKtS6UfqXM6s4WW7Sr0gGNIQ/viewform?embedded=true" width="640" height="1288" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
  </div>
  </center>

</section>