<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>IT Marathon 2022 || LSAC Iasi</title>

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:url"                content="http://itmarathon.lsaciasi.ro">
	<meta property="og:type"               content="website">
	<meta property="og:title"              content="IT Marathon">
	<meta property="og:description"        content="În 2022 Liga Studenților Facultății de Automatică și Calculatoare organizează competiţia ‘’IT Marathon’’, eveniment ce se adresează tuturor studenţilor şi elevilor pasionaţi de tehnologie din toată țara.Concursul, aflat la a VI-a ediție, a crescut în fiecare an ca număr de participanți și ca număr de secțiuni, anul acesta fiind extins la nivel naţional. Aceasta cuprinde o serie de prezentări, provocări și concursuri ce vizează diferite domenii din sfera IT prin intermediul cărora se vor evidenția abilități, aptitudini, respectiv dezvoltarea personală ale participanților">
	<meta property="og:image"              content="http://itmarathon.lsaciasi.ro/images/resource/itlogo2.png">
	<meta property="keywords" content="IT Marathon, LSAC, AC, concurs, marathon, hackathon, IT, studenți, elevi, desktop, web, mobile, embedded, junior, diy, concurs IT, LSAC Iasi, UNSR, Admitere AC, premii, Web Development, Full Stack, Front-end, Back-end, Liga Studentilor Facultatii de Automatica si Calculatoare, Iasi">
 	
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="preload" href="css/style.css" as="style">
    <link rel="preload" href="css/responsive.css" as="style">

	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
	
	<link rel="icon" type="image/png" href="images/logo mic.png" sizes="16x16">

	<link rel="preload" href="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v10.0" as="script">

</head>
<body>

 <!-- Facebok Page Plugin -->
 <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v10.0" nonce="buBc0LuH"></script>

<div class="boxed_wrapper">
    <section class="theme_menu stricky">
            <div class="menu-row">
                <div class="logo-container">
                    <div class="main-logo">
                        <a href="index.php"><img loading=lazy src="images/logo/logo-nou.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-9 menu-column">
                    <nav class="menuzord" id="main_menu">
                        <ul class="menuzord-menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="despre.php">Despre</a>
                                <ul class="dropdown">
                                    <li><a href="despre.php">Despre concurs</a></li>
                                    <li>
                                        <a href="sectiuni.php">Sectiuni</a>
                                        <ul class="dropdown">
                                                <li><a href="web.php">Web Development</a></li>
                                                <li><a href="desktop.php">Desktop & Mobile Applications</a></li>
                                                <li><a href="embedded.php">Design</a></li>
                                                <li><a href="junior.php">Junior Dev</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="locatie.php">Informatii</a></li>
                                </ul>
                            </li>
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="infoit.php">InfoIT</a></li>
                            <li><a href="parteneri.php">Parteneri</a></li>
                            <li><a href="contact.php">Contactează-ne</a>
                                <div class="megamenu megamenu-width-75">
                                    <div class="clearfix">
                                        <div class="author-details style-2 float_left">
                                            <div class="item">
                                                <h5>Coordonator Proiect:</h5>
                                                <div class="content">
                                                    <h5>Mama</h5>
                                                    <p><i class="fa fa-phone"></i>+4000000000</p>
                                                    <p><i class="fa fa-envelope"></i>mama@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <h5>Coordonator Fundraising:</h5>
                                                <div class="content">
                                                    <h5>Tata</h5> 
                                                    <p><i class="fa fa-phone"></i>+4000000000</p>
                                                    <p><i class="fa fa-envelope"></i>transliterator_create_from_rules@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- End of .menuzord-menu -->
                    </nav> <!-- End of #main_menu -->
                </div>

                <div class="link_btn right-column btn-desktop">
                    <a href="https://forms.gle/bL3uX8XXKeqaCvvm8" class="thm-btn" target=_blank>Înscrie-te acum!</a>
                </div>

                <div class="col-md-9 menu-column-mobile">
                    <div class="mobile-nav" onclick="mobileToggle(this)" id="menu-toggle">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>

                    <div class="mobile-buttons" id="n-btn">
                        <div class="mobile-buttons-close" id="menu-close">
                            <span>X</span>
                        </div>
                        <nav>
                            <a href="index.php">Home</a></li>
                            <a href="#" class="dd-button" id="first-bt">Despre</a>
                            <ul class="dropdown" id="first-dd">
                                <li><a href="despre.php">Despre concurs</a></li>
                                <li><a href="sectiuni.php">Sectiuni</a></li>
                                <li><a href="locatie.php">Informatii</a></li>
                            </ul>
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="infoit.php">InfoIT</a></li>
                            <li><a href="parteneri.php">Parteneri</a></li>
                            <li><a href="contact.php">Contactează-ne</a>
                        </nav>
                        
                        <div class="link_btn right-column">
                            <a href="https://forms.gle/bL3uX8XXKeqaCvvm8" class="thm-btn" target=_blank>Înscrie-te acum!</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>