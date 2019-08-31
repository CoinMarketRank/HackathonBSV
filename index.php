<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Proyecto MrAddon para la Hackathon de BSV en Barcelona 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo.png" alt="" width="300px" /></span>
						<h1>BSV eMagazine</h1>
						<p>La primera revista en español sobre Bitcoin Satoshi Vision.<br>Proyecto <a href="https://mraddon.blog/">@MrAddon</a> para la <a href="https://www.meetup.com/BitcoinSV_Valencia/events/263478931/">Hackathon de BSV en Barcelona 2019</a>
						</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Hackathon de BSV en Barcelona 2019</a></li>
							<li><a href="#first">Suscribirse a la revista con MoneyButton</a></li>
							<li><a href="#second">Ver estado de los pedidos en Jira</a></li>
							<li><a href="#cta">Sobre MrAddon</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>La primera revista en español sobre Bitcoin Satoshi Vision (Proyecto MrAddon)</h2>
										</header>
										<p>Evento específico para desarrolladores de software: Mini- Hackathon BSV en Barcelona Agosto 2019. Por primera vez que se dan cita varios desarrolladores de BitcoinSV de forma física en España, y además de la toma de contacto que este encuentro supone, quisiéramos llevar a cabo varios retos durante el fin de semana, el objetivo es poder crear en muy poco tiempo una aplicación MUY SENCILLA que sea capaz de cubrir un problema real de gente común, con la finalidad de poder generar transacciones y una pequeña facturación para el equipo que sea capaz de crearla. Un reto casi imposible!!!!!</p>
										<ul class="actions">
											<li><a href="https://www.meetup.com/BitcoinSV_Valencia/events/263478931/" class="button">Ver el evento</a></li>
										</ul>
									</div>
									<span class="image"><img src="images/pic01.png" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Suscribirse a la revista con MoneyButton</h2>
								</header>
                                                                <!--
								<ul class="features">
									<li>
										<span class="icon solid major style1 fa-code"></span>
										<h3>Ipsum consequat</h3>
										<p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
									</li>
									<li>
										<span class="icon major style3 fa-copy"></span>
										<h3>Amed sed feugiat</h3>
										<p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
									</li>
									<li>
										<span class="icon major style5 fa-gem"></span>
										<h3>Dolor nullam</h3>
										<p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
									</li>
								</ul>-->
                                                                <ul>
<h3>Introduce tu email para suscribirte:</h3>
<input type="text" id="mensaje" value="Por favor introduce tu email..." onfocus="this.value='';" onKeyPress="document.getElementsByClassName('money-button')[0].style.visibility = 'visible';"></input><br>
<div class="money-button"
  data-to="8986"
  data-amount="0.10"
  data-currency="EUR"
  data-label="Suscribirse"
  data-client-identifier="a1291c20c1ee392504a84dd296b71846"
  data-button-id="1564760808656"
  data-button-data="{'ID':'HACKATHONBSV'}"
  data-type="buy",
  data-on-payment="myCustomCallback",
  data-on-error="myCustomCallbackError",
  data-on-load="myCustomCallbackLoad",
  data-editable="false",
  data-disabled="false",
  data-dev-mode="false"
></div>
<!-- This line can go anywhere -->
<script src="https://www.moneybutton.com/moneybutton.js"></script>
<script>
  function myCustomCallbackLoad (error) {
    console.log('he button has loaded.')
  }
  function myCustomCallback (payment) {
    alert('Suscripcion realizada correctamente');
    var mensaje = document.getElementById("mensaje").value;
    console.log('A payment has occurred!', payment)
    window.location.replace("createIssue.php?amount=0.10&mensaje="+mensaje);
  }
  function myCustomCallbackError (error) {
    alert('Se ha producido un error. Por favor, vuelva a intentarlo en unos minutos');
    console.log('Oh no! Something went wrong: ${error}')
  }
  document.getElementsByClassName('money-button')[0].style.visibility = 'hidden';
</script><br>
<!--<input type="button" title="click" onclick="javascript:myCustomCallback();" value="Simular el pago"></input><br>-->
                                                                </ul>
								<!--<footer class="major">
									<ul class="actions special">
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer>-->
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Ver estado de los pedidos <a target="new" href="https://jira.coinmarketrank.io/issues/?filter=10200">(Ver en Jira)</a></h2>
									<p>
<?php
include('getIssues.php');
?>
<br>
<iframe width="100%" height="481px" src="https://jira.coinmarketrank.io/plugins/servlet/eazybi/accounts/6/embed/report/87?embed_token=qpb2ueqv216etxj93sekzhzvysk26ofncm2v42mdwbq42pejfizyfibocpcp" frameborder="0"></iframe>
                                                                        </p>
								</header>
								<!--<ul class="statistics">
									<li class="style1">
										<span class="icon solid fa-code-branch"></span>
										<strong>5,120</strong> Etiam
									</li>
									<li class="style2">
										<span class="icon fa-folder-open"></span>
										<strong>8,192</strong> Magna
									</li>
									<li class="style3">
										<span class="icon solid fa-signal"></span>
										<strong>2,048</strong> Tempus
									</li>
									<li class="style4">
										<span class="icon solid fa-laptop"></span>
										<strong>4,096</strong> Aliquam
									</li>
									<li class="style5">
										<span class="icon fa-gem"></span>
										<strong>1,024</strong> Nullam
									</li>
								</ul>
								<p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
								<footer class="major">
									<ul class="actions special">
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer>-->
							</section>

						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<h2>Sobre MrAddon</h2>
									<!--<p>Raul Pelaez Mendoza is an Atlassian Jira Expert based in Barcelona (Spain) with more than 7 years of experience in Atlassian Ecosystem and more than 20 years of experience in the implementation of Java-based Systems (starting in the IBM Lotus Notes/Domino era!) for Project Management Offices (PMO’s) in diverse public and private international corporations. Specialist in business process outsourcing (BPO) and operations management. Currently working at Ankonan doing consulting services, training courses and administration of the Atlassian platforms of diverse companies. Usual Jira and Blockchain teacher/speaker in the trainings based in Knowtech offices. Reviewer and translator of some books and video-trainings of Atlassian Jira.
He was the CTO of Linkcare Health Services and since 2016 is CTO/founder of MrAddon, Ankonan, Letradoo and CoinMarketRank. Blogger of www.mraddon.blog posting tricks and tips of Jira and Confluence and other topics like posts of Ethereum Smart-Contracts and other cryptocurrencies also private blockchain like IBM Hyperledger. Usual speaker in the Atlassian User Group Barcelona-based events. Creator of diverse plugins for Jira and Confluence (Server & Cloud) and Atlassian Marketplace TOP Vendor. Google Play Vendor, Apple Store Vendor, Chrome and Firefox app vendor. Etherum & Blockchain fanatic, DJ and artist with experience in Digital Music Distribution. eazyBI partner and training partner. IBM partner.
Technical Engineer in Computer Systems by UPC University (Barcelona). Technology Teacher Certificate by the UPC. SNOMED-CT/HL7/CDA Certified. Specialist in Intellectual Property Expertise by the ACPJT. IT-Forensics Expert by the ACPJT. Certified Blockchain Solution Architect (CBSA) by the Blockchain Training Alliance.</p>
								--></header>
								<footer class="major">
									<ul class="actions special">
										<li><a href="https://www.linkedin.com/in/ra%C3%BAl-pel%C3%A1ez-mendoza-ba037a28/" class="button primary">Ir a mi Linkedin</a></li>
										<!--<li><a href="generic.html" class="button">Learn More</a></li>-->
									</ul>
								</footer>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>MrAddon</h2>
							<p>Raul Pelaez Mendoza
Near UPC Campus Besós BarcelonaTech - Forum Diagonal Mar.
Barcelona - 08019 (Spain)
raulpelaez@mraddon.com
 
www.MrAddon.com</p>
							<ul class="actions">
								<li><a href="https://mraddon.blog/" class="button">Mas info</a></li>
							</ul>
						</section>
						<section>
							<h2>Social</h2>
							
							<ul class="icons">
								<li><a href="https://twitter.com/MrAdd0n" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
								<!--<li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>-->
								<li><a href="https://github.com/CoinMarketRank/HackathonBSV" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
								<!--<li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>-->
							</ul>
                                                        <ul>
                                                        <!-- This line should go where you want to put your button -->
<div class="money-button"
  data-to="8986"
  data-amount=""
  data-currency="EUR"
  data-label="Donar a MrAddon"
  data-client-identifier="a1291c20c1ee392504a84dd296b71846"
  data-button-id="1564760808656"
  data-button-data="{'ID':'HACKATONBSV_DONACION'}"
  data-type="buy",
  data-editable="true",
  data-disabled="false",
  data-dev-mode="false"
></div>
<!-- This line can go anywhere -->
<script src="https://www.moneybutton.com/moneybutton.js"></script>
                                                        </ul>
						</section>
						<p class="copyright">&copy; MrAddon. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>