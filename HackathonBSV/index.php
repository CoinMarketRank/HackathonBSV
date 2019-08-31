<html>
<header><title>HackathonBSV</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
</header>
<body>
<h1>HackathonBSV</h1>
<p>Evento específico para desarrolladores de software: Mini- Hackathon BSV en Barcelona Agosto 2019 Por primera vez que se dan cita varios desarrolladores de BitcoinSV de forma física en España, y además de la toma de contacto que este encuentro supone, quisiéramos llevar a cabo varios retos durante el fin de semana, el objetivo es poder crear en muy poco tiempo una aplicación MUY SENCILLA que sea capaz de cubrir un problema real de gente común, con la finalidad de poder generar transacciones y una pequeña facturación para el equipo que sea capaz de crearla. Un reto casi imposible!!!!!</p>
<!-- This line should go where you want to put your button -->
<h1>Proyecto de MrAddon para la Hackathon BSV de Barcelona 2019</h1>
<p>En este proyecto proponemos un modelo de subscripción usando Moneybutton a una cantidad fija de 0.10 €. Una vez suscrito se genera un ticket en Jira que seguirá un workflow para gestionar el pedido de la suscripción</p>
<input type="text" id="mensaje" value="Indica aqui tu email... " size="100px;"></input><br>
<input type="button" title="click" onclick="javascript:myCustomCallback();" value="Simular el pago"></input><br>
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
  data-dev-mode="true"
></div>
<!-- This line can go anywhere -->
<script src="https://www.moneybutton.com/moneybutton.js"></script>
<script>
  function myCustomCallbackLoad (error) {
    console.log('he button has loaded.')
  }
  function myCustomCallback (payment) {
    //alert('OK!');
    var mensaje = document.getElementById("mensaje").value;
    console.log('A payment has occurred!', payment)
    window.location.replace("createIssue.php?amount=0.10&mensaje="+mensaje);
  }
  function myCustomCallbackError (error) {
    //alert('ERROR');
    console.log('Oh no! Something went wrong: ${error}')
  }
</script>
<br>
<?php
include('getIssues.php');
?>
</body>
</html>