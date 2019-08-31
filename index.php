<html>
<header><title>HackathonBSV
</title></header>
<body>
<h1>HackathonBSV</h1>
<p>Evento específico para desarrolladores de software: Mini- Hackathon BSV en Barcelona Agosto 2019 Por primera vez que se dan cita varios desarrolladores de BitcoinSV de forma física en España, y además de la toma de contacto que este encuentro supone, quisiéramos llevar a cabo varios retos durante el fin de semana, el objetivo es poder crear en muy poco tiempo una aplicación MUY SENCILLA que sea capaz de cubrir un problema real de gente común, con la finalidad de poder generar transacciones y una pequeña facturación para el equipo que sea capaz de crearla. Un reto casi imposible!!!!!</p>
<!-- This line should go where you want to put your button -->
<div class="money-button"
  data-to="8986"
  data-amount=""
  data-currency="EUR"
  data-label="Pagar"
  data-client-identifier="a1291c20c1ee392504a84dd296b71846"
  data-button-id="1564760808656"
  data-button-data="{'ID':'XXXXX'}"
  data-type="buy",
  data-on-payment="myCustomCallback",
  data-on-error="myCustomCallbackError",
  data-on-load="myCustomCallbackLoad",
  data-editable="true",
  data-disabled="false",
  data-dev-mode="true"
></div>
<!-- This line can go anywhere -->
<script src="https://www.moneybutton.com/moneybutton.js"></script>
<script>
  function myCustomCallbackLoad (error) {
    cconsole.log(`The button has loaded.`)
  }
  function myCustomCallback (payment) {
    alert('OK!');
    console.log('A payment has occurred!', payment)
  }
  function myCustomCallbackError (error) {
    alert('ERROR');
    console.log(`Oh no! Something went wrong: ${error}`)
  }
</script>
</body>
</html>
