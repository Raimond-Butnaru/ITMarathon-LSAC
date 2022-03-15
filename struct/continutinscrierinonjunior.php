
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
if(isset($_POST['numecoechipier']))
{
  $numecoechipier=$_POST['numecoechipier'];
}
if(isset($_POST['nrtelcoechipier']))
{
  $nrtelcoechipier=$_POST['nrtelcoechipier'];
}
if(isset($_POST['emailcoechipier']))
{
  $emailcoechipier=$_POST['emailcoechipier'];
}
if(isset($_POST['scoalacoechipier']))
{
  $scoalacoechipier=$_POST['scoalacoechipier'];
}
if(isset($_POST['sectiune']))
{
  $sectiune=$_POST['sectiune'];
}
$http_referrer = getenv( "HTTP_REFERER" );
if(isset($_POST['submit']))
{
      $sql = "INSERT INTO inscrieri(nume, nrtel, email, localitate, scoala, cazare, sectiune, mesaj,
				                    numecoechipier, nrtelcoechipier, emailcoechipier, scoalacoechipier)
      VALUES ('$nume', '$nrtel', '$email', '$localitate', '$scoala', '$cazare', '$sectiune', '$mesaj',
			  '$numecoechipier', '$nrtelcoechipier', '$emailcoechipier', '$scoalacoechipier')";

      if ($conn->query($sql) === TRUE)
      {
        echo "<h1 align=\"center\">Te-ai inscris cu succes!</h1>";
		
		$nume = strtok( $nume, "\r\n" );
		$email = strtok( $email, "\r\n" );

		$messageproper =

        "---------- IT Marathon message ----------\n\n" . "\nSalut " . $nume . ",\nTe-ai inscris cu succes la sectiunea: " . $sectiune. "!";

      mail($email, "Inscriere IT Marathon\r\n", $messageproper, "From: \"IT Marathon\" <office@lsaciasi.ro>\r\nReply-To: \"IT Marathon\" <office@lsaciasi.ro>\r\nX-Mailer: chfeedback.php 2.04" );

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
    
    <link href="css/contact.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
	<script src='https://www.google.com/recaptcha/api.js?hl=ro'></script>

    <!--Contact form start
    <div align="center">
    <section id="contact" >
        <h1>Inscrieri!</h1>
		
		22 Aprilie - Desktop
		27 Aprilie - Mobile
		21 Aprilie - Design
		29 Aprilie - Web
		<br>
              <form action="#" method="post" class="cform-form" >
			        <p><select name="sectiune" required="true">
						  <option value="">Alege sectiunea...</option>
                          <option value="web">Web</option>
                          <option value="desktop">Desktop</option>
                          <option value="mobile">Mobile</option>
						  <option value="design">Design</option>
                        </select>
					</p>
					<br>
                    <p><input type="text" name="nume" required="true" required="true" class="cform-text" placeholder="Numele*" class="cform-text" size="40" title="Numele"></p>
                    <br>
                    <p><input type="text" name="nrtel" required="true" placeholder="Numarul de telefon*" class="cform-text" size="40" title="Numarul de telefon"></p>
                    <br>
                    <p><input type="text" name="email" required="true" placeholder="Email-ul tau*" class="cform-text" size="40" title="Email-ul tau"></p>
                    <br>
                    <p><input type="text" name="localitate" required="true" placeholder="Orasul in care locuiesti*" class="cform-text" size="40" title="Orasul in care locuiesti"></p>
                    <br>
                    <p><input type="text" name="scoala" required="true" placeholder="Liceul sau facultatea la care esti*" class="cform-text" size="40" title="Liceul sau facultatea la care esti"></p>
                    <br>
                    <p><input type="text" name="numecoechipier" placeholder="Nume coechipier" class="cform-text" size="40" title="Nume coechipier"></p>
                    <br>
                    <p><input type="text" name="nrtelcoechipier" placeholder="Numar de telefon coechipier" class="cform-text" size="40" title="Numar de telefon coechipier"></p>
                    <br>
                    <p><input type="text" name="emailcoechipier" placeholder="Email coechipier" class="cform-text" size="40" title="Email coechipier"></p>
                    <br>
                    <p><input type="text" name="scoalacoechipier" placeholder="Liceu sau facultate coechipier" class="cform-text" size="40" title="Liceu sau facultate coechipier"></p>
                    <br>
                    <p><textarea name="cazare" cols="40" rows="5" required="true" placeholder="Aveti nevoie sa va asiguram cazare? Daca da, pentru ce zile?*" class="cform-text" title="Aveti nevoie sa va asiguram cazare? Daca da, pentru ce zile?"></textarea></p>
                    <br>
                    <p><textarea name="mesaj" cols="40" rows="5" title="Scrie-ne un mesaj" placeholder="Vrei sa ne lasi un mesaj? Nu ezita"></textarea></p>
                    <br>
					<div class="g-recaptcha" data-sitekey="6LdQhhMUAAAAADFA9YIXzYXtmtkUrQeFeCtedc2n"></div>
					<br>
                   <p><input type="submit" value="Trimitere" name="submit"></p>
              </form>
    </section>
    -->
    <div align=center>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScJDtkwwJfWVvx3xvqxtu4YhKQ0vALXtEhuiev46AcjocMdUw/viewform?embedded=true" width="640" height="2312" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
  </div>
  <!--Contact form end-->

</section>