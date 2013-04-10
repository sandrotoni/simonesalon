<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
        <meta name="apple-mobile-web-app-capable" content="yes" /> 
        <meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
        <title>
		Simone Salon
        </title>
		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
 		<link rel="stylesheet" href="css/jquery.mobile-1.3.0.css" />
		<script type="text/javascript" src="js/jquery.mobile-1.3.0.min.js"></script>

        <!-- User-generated js -->

    </head>
	<body onload="init()">
        <section id="prenotazione" data-role="page" data-theme="b">
            <header data-role="header">
				<a href="prenota.html" data-role="button" data-icon="arrow-l">Back</a>
                <h1>
                    Simone Salon
                </h1>
				<a href="index.html" data-role="button" data-icon="home">Home</a>
            </header>
            <div data-role="content" class="content">	
				<?php
				// indirizzo di chi riceve la mail è sottolineato ma nel codice non sottilineatelo

				if ((trim($_POST['telefono']) != "") && (trim($_POST['nome']) != "")) {    //questo fa si che se i campi -mail- e "messaggio" sono vuoti la form non invia nessuna mail
				$to = "simonesalonedibellezza@yahoo.com";
				//$to = "sandrotoni@etronic.org";
				$headers = "From: " . $_POST['mail'] . "\n";
				// soggetto della mail
				$subject = "Prenotazione da WebApp";

				// corpo messaggio
				$body = "Inviata da: " . trim(stripslashes($_POST["nome"])) . " - " . trim(stripslashes($_POST["mail"])) . " - " . trim(stripslashes($_POST["telefono"])) . "\n\n"; //nome telefono ed indirizzo e-mail che manda la mail, come si vede riprende l'id del campo destinato all'inserimento della mail del mittente

				$body .= "Oggetto: " . trim(stripslashes($_POST["object"])) . "\n\n"; //oggetto del messaggio
				$body .= "Data Prenotazione: " . trim(stripslashes($_POST["data"])) . "\n\n" . "Servizi: " . trim(stripslashes($_POST["serv1"])) . "-" . trim(stripslashes($_POST["serv2"])) . "-" . trim(stripslashes($_POST["serv3"])) . "-" . trim(stripslashes($_POST["serv4"])) . "-" . trim(stripslashes($_POST["serv5"])) . "-" . trim(stripslashes($_POST["serv6"])) . "-" . trim(stripslashes($_POST["serv7"])) . "-" . trim(stripslashes($_POST["serv8"])) . "-" . trim(stripslashes($_POST["serv9"])) . "-" . trim(stripslashes($_POST["serv10"])) . "-" . trim(stripslashes($_POST["serv11"])) . "-" . trim(stripslashes($_POST["serv12"])) . "-" . trim(stripslashes($_POST["serv13"])) . "-" . trim(stripslashes($_POST["serv14"])) . "-" . trim(stripslashes($_POST["serv15"])) . "-" . trim(stripslashes($_POST["serv16"])) . "-" . trim(stripslashes($_POST["serv17"])) . "\n"; //messaggio


				// invio mail
				mail($to, $subject, $body, $headers); // SE L'INOLTRO E' ANDATO A BUON FINE...

				echo "<center><h1>Prenotazione inviata con successo. Grazie per averci contattato</h1><br/><h3>Premere il pulsante <b>Home</b> per continuare.</h3><br/><h3>Lo Staff  - Simone Salone di Bellezza -</h3></center>";

				} else {// altrimenti
				echo "<center><h1>Inserire almeno la propria mail e la prenotazione. Grazie.</h1><br/><br/><h3>Premere il pulsante <b>Back</b> per continuare.</h3></center>";

				}

				?>
			</div>
            <footer data-role="footer">
				<h2>
                    Simone Salon &copy 2013
                </h2>
			</footer>
        </section>
	</body>
</html>
