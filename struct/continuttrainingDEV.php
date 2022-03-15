<?php
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
	VALUES ('$nume', '$nrtel', '$email', '-', '$scoala', '-', 'training cyber', '-')";
	
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
?>

<section class="about-faq sec-padd">
    <div class="container">
        <div class="section-title center">
            <h2>Cyber Security Training</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-info">

                    <div class="text">
                        <p>Securitatea cibernetica este un subiect care ne poate afecta pe fiecare dintre noi, atat la nivel personal cat si la nivel profesional, prin proiectele pe care le dezvoltam.
<br>
In cadrul trainingului se va discuta despre conceptul de securitate cibernetica, tratandu-se subiecte precum bazele unui ecosistem de dezvoltare cat mai sigur si pericolele penetrarii acestuia. 
<br>
Trainingul este ideal pentru cei care vor isi largeasaca viziunea pe zona de defense.
<br>
Trainingul incepe la ora 11:00 pe data de 4 mai, in amfiteatrul AC2-1 si este furnizat de catre compania <a href="https://www.dev51.io">DEV51</a>, avand o durata de 1,5 ore. Participarea este gratuita.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div>
                    <a href="http://dev51.io" target="_blank"><img src="images/resource/logo_dev51.png" alt="Dev51" width="200" height="200" ></a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="about-faq sec-padd">
    
    <link href="css/contact.css" rel="stylesheet">
	
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
	<script src='https://www.google.com/recaptcha/api.js?hl=ro'></script>

    <!--Contact form start-->
	<div align="center">
    <section id="contact" >
	
        <h1>Inscrieri!</h1>
		
              <form action="trainingDEV.php" method="post" class="cform-form">
                    <!--<p><input type="text" name="nume" placeholder="Numele*" class="cform-text" size="40" title="Numele"></p>-->
					<p><input type="text" name="nume" placeholder="Numele*" required="true" class="cform-text" size="40" title="Numele"></p>
                    <br>
                    <p><input type="text" name="nrtel" placeholder="Numarul de telefon*" required="true" class="cform-text" size="40" title="Numarul de telefon"></p>
                    <br>
                    <p><input type="text" name="email" placeholder="Email*" required="true" class="cform-text" size="40" title="Email-ul tau"></p>
                    <br>
                    <p><input type="text" name="scoala" required="true" placeholder="Liceul sau facultatea la care sunteti*" class="cform-text" size="40" title="Liceul sau facultatea la care esti"></p>
                    <br>
					<div class="g-recaptcha" data-sitekey="6LdQhhMUAAAAADFA9YIXzYXtmtkUrQeFeCtedc2n"></div>
					<br>
                   <p><input type="submit" value="Trimitere" name="submit"></p>
              </form>
    </section>
	</div>
  </div>
  <!--Contact form end-->

</section>

