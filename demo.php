<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {




  // Obtener los datos del formulario
  $ciudad = $_POST["ciudad"];
  $correoElectronico = $_POST["correoElectronico"];
  $nombreCompleto = $_POST["nombreCompleto"];
  $celular = $_POST["celular"];
  $cargo = $_POST["cargo"];
  $interes = $_POST["interes"];
  $experiencia = $_POST["experiencia"];



  // Configurar el correo
  $to = $correoElectronico; // Reemplaza con la dirección de correo del destinatario
  $subject = "Nuevo formulario de contacto";
  $message = "Ciudad: " . $ciudad . "\n";
  $message .= "Correo Electrónico: " . $correoElectronico . "\n";
  $message .= "Nombre Completo: " . $nombreCompleto . "\n";
  $message .= "Celular: " . $celular . "\n";
  $message .= "Cargo: " . $cargo . "\n";
  $message .= "Interés: " . $interes . "\n";
  $message .= "Experiencia: " . $experiencia . "\n";

  // Enviar el correo
  $headers = "From: " . $correoElectronico;
  if (mail($to, $subject, $message, $headers)) {
    // El correo se envió exitosamente
    echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
  } else {
    // Hubo un error al enviar el correo
    echo "Ocurrió un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
}
?>
    <main>
      <div class="upperBand">
        <p>Ahorra <strong>tiempo</strong>, vive <strong>tranquilo</strong></p>
      </div>
      <div>
        <header class="mainPage">
          <img src="./assets/logoCondaty.svg" alt="Logo de Condaty by FOS" />
          <div>
            <a>Whatsapp</a>
            <button class="btnPrimary">Solicitar Demo</button>
          </div>
        </header>
        <section id="sectionDiv">
          <div id="dentroSection">
            <div class="innerContainer">
              <p>¡Deja tus datos y te agendaremos una prueba gratuita!</p>
              <form action="" method = "post">
                <div class="innerFormDiv">
                  <select name="ciudad">
                    <option value="La Paz">La Paz</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Cochabamba">Cochabamba</option>
                    <option value="Sucre">Sucre</option>
                    <option value="Oruro">Oruro</option>
                    <option value="Tarija">Tarija</option>
                    <option value="Potosí">Potosí</option>
                    <option value="Trinidad">Trinidad</option>
                    <option value="Riberalta">Riberalta</option>
                    <option value="Montero">Montero</option>
                    <option value="Montero" disabled selected>
                      Selecciona una ciudad
                    </option>
                  </select>
                  <input
                    type="text"
                    placeholder="Correo Electrónico"
                    id="correoElectronico"
                    name = "correoElectronico"
                  />
                </div>
                <div class="innerFormDiv">
                  <input type="text" placeholder="Nombre Completo" name="nombreCompleto" />
                  <div class="dosDivsFlex">
                    <input type="number" placeholder="Celular" name="celular" />
                    <input type="text" placeholder="Cargo" name = "cargo" />asd
                  </div>
                </div>
                <input
                  type="text"
                  placeholder="¿Por qué te interesa este servicio?"
                  name="interes"
                />
                <input
                  type="text"
                  placeholder="¿Cuánta experiencia tienes en el cargo?"
                  name ="experiencia"
                />
                <p>
                  Al enviar este formulario estás aceptando nuestra
                  <a href="#">política de privacidad</a> y tratamiento de datos
                  personales
                </p>
                <button type="submit" class="btnPrimary btnGrande">
                  Enviar Mensaje
                </button>
              </form>
            </div>
          </div>
        </section>
      </div>
    </main>
    <footer>
      <div class="footerMSG">
        <p>
          ¡Estaremos felices de atenderte y resolver cualquier inquietud!
          Escríbenos, un asesor te atenderá de inmediato.
        </p>
        <button>Contáctanos</button>
      </div>
    </footer>
  </body>
</html>
