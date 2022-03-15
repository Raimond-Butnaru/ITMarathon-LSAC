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
	VALUES ('$nume', '$nrtel', '$email', '$localitate', '$scoala', '$cazare', 'Hack', '$mesaj')";
	
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
            <h2>Workshop competitiv Cyber Security</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-info">

                    <div class="text">
                        <p>Workshopul se adreseaza persoanelor curioase pe zona de cyber security, dar cu o minima experienta in software development.
<br>
Participantii vor invata modalitati de obtinere a accesului intr-un sistem si masuri de preventie.
Totul se va intampla intr-un mediu securizat iar participantii trebuie sa aiba la dispozitie o masina virtuala cu Kali Linux. 
<br>
Participantii vor fi punctati pe parcursul intregului workshop iar primii vor putea castiga un  internship de 3 luni la sediul din Bucuresti al companiei <a href="https://www.dev51.io">DEV51</a> + bani "de cheltuiala".
<br>
Workshop-ul incepe la ora 13.00 pe data de 4 mai, putand dura minim 3 ore, in functie de priceperea si pregatirea studentilor. Accesul este gratuit.</p>
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
		
              <form action="inscrierihack.php" method="post" class="cform-form">
                    <!--<p><input type="text" name="nume" placeholder="Numele*" class="cform-text" size="40" title="Numele"></p>-->
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
  </div>
  <!--Contact form end-->

</section>

