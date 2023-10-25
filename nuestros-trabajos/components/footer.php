      <!-- Section Footer -->
      <div class="container bg_footer1">
        <div class="content">
            <div class="section_footer_politicas ">
                <nav class="section_footer_politicas_enlaces">
                    <a href="/aviso-legal/" target="_blank">Aviso Legal</a>
                    <a href="/politicas-de-cookies/" aria-label="Políticas de Cookies" target="_blank">Política de Cookies</a>
                    <a href="/politicas-de-privacidad/" target="_blank">Política de Privacidad</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="container bg_footer2">
        <div class="content">
            <footer class="section_footer">
                <div class="section_footer_derechos">
                    <p class="parrafo_uno">© 2023 Manisur. Todos los derechos reservados.</p>
                    <p class="parrafo_dos">Diseño WEB realizado por <a href="https://servynet.es" target="_blank">Servynet</a></p>
                </div>
            </footer>
        </div>
    </div>

  <?php
  // require_once '../comons/cookies.php';
  ?>

  <?php
  if (isset($_SESSION['modal'])) {
    if ($_SESSION['modal'] == true) {
      echo '<link rel="stylesheet" href="/public/css/modal.css">
                <div class="modal">
                  <div class="content_modal">
                    <div class="text textCenter">
                      ' . $_SESSION['content_modal'] . '
                    </div>
                  </div>
                </div>
              </div>
              
              <script src="/public/js/components/modal.js"></script>';

      $_SESSION['modal'] = false;
    }
  }
  ?>

  <script src="/public/js/menu.js"></script>
  <script src="/public/js/editor.js"></script>
  <script src="/public/js/editor_en.js"></script>
  <script src="/public/js/carga_diferida.js"></script>
  <script src="/public/js/recatpcha.js"></script>
  <script src="/public/js/modal.js"></script>

  </body>

  </html>