<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <main>
      <div class="upperBand">
        <p>Ahorra <strong>tiempo</strong>, vive <strong>tranquilo</strong></p>
      </div>
      <div>
        <header class="mainPage">
          <img src="./assets/logoCondaty.svg" alt="Logo de Condaty by FOS" />
          <div>
            <a href="#">Whatsapp</a>
            <button class="btnPrimary">Solicitar Demo</button>
          </div>
        </header>
        <section id="sectionDiv">
          <div id="dentroSection">
            <div class="innerContainer">
              <p>¡Deja tus datos y te agendaremos una prueba gratuita!</p>
              <form action="enviar_correo.php" method="POST">
                <div class="innerFormDiv">
                  <select name="ciudad" required>
                    <option value="">Selecciona una ciudad</option>
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
                  </select>
                  <input
                    type="email"
                    name="correoElectronico"
                    placeholder="Correo Electrónico"
                    required
                  />
                </div>
                <div class="innerFormDiv">
                  <input
                    type="text"
                    name="nombreCompleto"
                    placeholder="Nombre Completo"
                    required
                  />
                  <div class="dosDivsFlex">
                    <input
                      type="tel"
                      name="celular"
                      placeholder="Celular"
                      required
                    />
                    <input
                      type="text"
                      name="cargo"
                      placeholder="Cargo"
                      required
                    />
                  </div>
                </div>
                <textarea
                  name="interes"
                  placeholder="¿Por qué te interesa este servicio?"
                  required
                ></textarea>
                <input
                  type="text"
                  name="experiencia"
                  placeholder="¿Cuánta experiencia tienes en el cargo?"
                  required
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
