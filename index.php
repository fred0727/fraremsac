<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Frarem </title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
  <header class="container-fluid w-100 bg-white shadow-lg d-flex justify-content-center align-items-center p-2" id="inicio">
    <nav class="container navbar navbar-expand-lg ps-3 ps-lg-0">
      <a class="navbar-brand col-xl-6 col fs-1 d-flex justify-content-start align-items-center text-dark"
        href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
          class="bi bi-exclude me-2" viewBox="0 0 16 16">
          <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm12 2H5a1 1 0 0 0-1 1v7h7a1 1 0 0 0 1-1V4z" />
        </svg>
        Frarem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-lg-3" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-start fs-5">
          <li class="nav-item pe-lg-4">
            <a class="nav-link active fs-5" aria-current="page" href="#iniciopage">Inicio</a>
          </li>
          <li class="nav-item pe-lg-4 fs-5">
            <a class="nav-link" href="#productos">Servicios</a>
          </li>
          <li class="nav-item pe-lg-4 fs-5">
            <a class="nav-link" href="#nosotros">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#contact-form">Contacto</a>
          </li>
        </ul>
        <div class="justify-content-lg-end ms-xl-4">
          <a href="#contact-form" class="btn btn-warning shadow-sm btn-lg me-sm-3 me-xl-4 shadow-sm fs-6">Contactanos</a>
        </div>
      </div>
    </nav>
  </header>
  <!-- <section class="header-hide"></section> -->
  <div id="iniciopage" class="h-10-div"></div>
  <div class="carousel slide carou-slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active position-relative">
        <div class="text-carousel containercol-lg-12">
          <h1>Llantas y aros <br> industriales</h1>
          <a href="#productos" class="text-decoration-none text-warning"><button class="btn btn-outline-warning shadow-sm btn-lg pe-lg-4 ps-lg-4 pe-md-3 ps-md-3 shadow-sm fs-5 mt-4">Ver Productos</button></a>
        </div>
        <img src="./img/portadafraremsac.png" class="d-block w-100 img-slider" alt="...">
      </div>
    </div>
  </div>
  <div class="container-fluid d-none d-md-none d-lg-block brands">
    <div class="container-fluid p-2 p-lg-5 w-100">
      <div class="w-100 mb-5 mt-5 d-flex justify-content-between align-items-center overflow-scroll brands-img">
        <img src="./img/logos/googyear.png" alt="" width="250" height="65" class="rounded-1 me-5">
        <img src="./img/logos/bridgestone.png" alt="" width="250" height="45" class="rounded-1 me-5">
        <img src="./img/logos/dunlop.png" alt="" width="250" height="65" class="rounded-1 me-5 me-5">
        <img src="./img/logos/firelli.png" alt="" width="200" height="50" class="rounded-1 me-5">
        <img src="./img/logos/kumhotire.png" alt="" width="250" height="70" class="rounded-1 me-5">
        <img src="./img/logos/roadstone.png" alt="" width="320" height="50" class="rounded-1 me-5">
        <img src="./img/logos/yokohama.png" alt="" width="250" height="50" class="rounded-1 me-5">
      </div>
    </div>
  </div>
  <div class="container-fluid d-lg-none d-md-block brands">
    <div class="container-fluid p-2 p-lg-5 w-100">
      <div class="w-100 mb-5 mt-5 d-flex justify-content-between align-items-center overflow-scroll brands-img">
        <img src="./img/logos/googyear.png" alt="" width="150" height="40" class="rounded-1 me-5">
        <img src="./img/logos/bridgestone.png" alt="" width="140" height="30" class="rounded-1 me-5">
        <img src="./img/logos/dunlop.png" alt="" width="150" height="40" class="rounded-1 me-5 me-5">
        <img src="./img/logos/firelli.png" alt="" width="145" height="40" class="rounded-1 me-5">
        <img src="./img/logos/kumhotire.png" alt="" width="160" height="50" class="rounded-1 me-5">
        <img src="./img/logos/roadstone.png" alt="" width="200" height="25" class="rounded-1 me-5">
        <img src="./img/logos/yokohama.png" alt="" width="160" height="35" class="rounded-1 me-5">
      </div>
    </div>
  </div>
  <div id="productos" class="h-10-div"></div>
  <div class="container-fluid mb-5">
    <div class="container col-lg-12 p-3 p-lg-5 justify-content-start">
      <h1 class="pt-5 title-product">NUESTROS PRODUCTOS <br>
        <hr class="hr-title">
      </h1>
      <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="col-lg-6 p-2">
          <div class="card card-hover border-0 bg-transparent">
            <div class="position-relative mt-5 card-products">
              <img src="./img/portadallantaimg.jpg" class="rounded-1 w-100 img-products" height="450" alt="Ralph Edwards">
              <div
                class="card-img-overlay d-flex flex-column align-items-start justify-content-start rounded-1 card-text-img pt-4 ps-4 card-over fs-2 card-overp">
                <h1 class="text-white fs-2 fw-bolder">Llantas y aros industriales</h1>
                <p class="fs-5">Contamos con amplia experiencia en brindar Llantas para todo tipo de montacargas asi
                  como los aros industriales utilizados por los distintos tipos y marcas de los mismos.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 p-2">
          <div class="card card-hover border-0 bg-transparent">
            <div class="position-relative mt-5 card-products">
              <img src="./img/llantasolida.webp" class="rounded-1 w-100 img-products" height="450" alt="Ralph Edwards">
              <div
                class="card-img-overlay d-flex flex-column align-items-start justify-content-start rounded-1 card-text-img pt-4 ps-4 card-over fs-2 card-overp">
                <h1 class="text-white fs-2 fw-bolder">Llantas solidas</h1>
                <p class="fs-5">Llantas solidas especiales para montacargas. <br> Llantas de dos y tres capas de caucho
                  preparadas para las distintas rutinas de trabajo propias de los montacargas</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 p-2">
          <div class="card card-hover border-0 bg-transparent card-products">
            <div class="position-relative mt-5">
              <img src="./img/llantasneumaticas.jpg" class="rounded-1 w-100 img-products" height="450" alt="Ralph Edwards">
              <div
                class="card-img-overlay d-flex flex-column align-items-start justify-content-start rounded-1 card-text-img pt-4 ps-4 card-over fs-2 card-overp">
                <h1 class="text-white fs-2 fw-bolder">Llantas neumaticas</h1>
                <p class="fs-5">Llantas neumaticas de construccion diagonal y radial preparados para los mas exigentes
                  terrenos de trabajo.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 p-2">
          <div class="card card-hover border-0 bg-transparent">
            <div class="position-relative mt-5">
              <img src="./img/llantasmacizas.jpg" class="rounded-1 w-100 img-products card-products" height="450" alt="Ralph Edwards">
              <div
                class="card-img-overlay d-flex flex-column align-items-start justify-content-start rounded-1 card-text-img pt-4 ps-4 card-over fs-2 card-overp">
                <h1 class="text-white fs-2 fw-bolder">Llantas macizas POB</h1>
                <p class="fs-5">Llantas Macizas POB especiales para montacargas conteineros y de perfil bajo para dos o
                  tres turnos de trabajo y en todas las medidas existentes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="h-10-div" id="nosotros"></div>
  <div class="container-fluid pb-5 pt-5">
    <div class="container col-lg-12 p-lg-3 p-xl-5 justify-content-start">
      <h1 class="pt-0 title-product">NOSOTROS <br>
        <hr class="hr-title-2">
        <div class="d-flex justify-content-start align-items-start mt-5 flex-wrap">
          <div
            class="container d-flex justify-content-lg-center align-items-lg-center p-2 d-none d-lg-flex col-lg-6 col-md-12">
            <img src="./img/equipo.jpg" alt="" class="rounded-2 shadow-lg w-auto img-fluid">
          </div>
          <div class="p-lg-5 pt-5 pt-md-0 pt-lg-0 d-flex justify-content-center align-items-center flex-column col-lg-6 col-md-12 p-3">
            <h2 class="mb-4 d-flex justify-content-start align-items-start w-100 text-enterprise">Frarem rims and tyres
            </h2>
            <p class="p-nosotros">
              Somos una empresa joven que nace por la necesidad del mercado de contar con verdaderos especialistas en
              llantas que puedan determinar de forma independiente cual es la solucion que se adapte de manera economica
              y rentable al transporte en general.
            </p>
            <p class="p-nosotros">
              Sin necesidad de ser direccionados por una marca en especial ya que no comercializamos ningun tipo de
              llanta, para dicho fin contamos con la verdadera capacidad de proporcionarles soluciones en donde otros no
              las encuentran, nos respaldan colaboiradores que tienen años de experiencia y amplios conocimientos en
              todos los tipos de
              llantas pero orientados principalmente a buscar el beneficio de su empresa sin importar la marca de
              neumaticos que use.
            </p>
            <div class="container m-0 p-0 d-flex justify-content-start align-items-center mt-3">
              <!-- <h1 class="fs-5 text-danger">Redes Sociales:</h1> &nbsp;&nbsp; -->
              <button type="button"
                class="btn btn-outline-primary d-flex justify-content-center align-items-center"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg> &nbsp; Facebook</button> &nbsp; &nbsp;
              <button type="button"
                class="btn btn-outline-success d-flex justify-content-center align-items-center"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
                  viewBox="0 0 16 16">
                  <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg> &nbsp; Whatsapp</button>
              <!-- <a href="#" class=""><img src="./img/iconos/facebookicon.png" alt="" width="42" height="42"></a> -->
              <!-- <a href="#"><img src="./img/iconos/whatsapp.png" alt="" width="42" height="42"></a> -->
            </div>
          </div>
        </div>
      </h1>
    </div>
  </div>
  <div class="h-10-div" id="contact-form"></div>
  <div class="contact-form p-xl-5">
    <div class="container-fluid d-flex justify-content-between p-5 pt-0 flex-wrap">
      <div class="container col-md-12 col-lg-7 p-1 p-sm-1 p-md-2 p-lg-5 p-xl-5 pt-xl-0 pt-lg-0">
        <h1 class="title-product">Contactanos <br>
          <hr class="hr-title">
        </h1>
        <div class="pt-4">
          <h4 class="fs-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-envelope-fill text-danger" viewBox="0 0 16 16">
              <path
                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
            </svg>&nbsp;&nbsp;ventasllantas@fraremsac.com
          </h4>
          <h4 class="fs-5 mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-envelope-fill text-danger" viewBox="0 0 16 16">
              <path
                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
            </svg>&nbsp;&nbsp;ventasllantas@fraremsac.com
          </h4>
          <h4 class="fs-5 mb-5 mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-telephone-fill text-danger" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>&nbsp;&nbsp;+51 956792456
          </h4>
          <h4 class="fs-5 pb-2 d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
              class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>&nbsp;Panamericana Sur Km. 275
          </h4>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249744.72072813608!2d-77.12786398622103!3d-12.025526180006032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c81e30b6695f%3A0x1015ccad533f5be5!2sParque%20John%20F.%20Kennedy!5e0!3m2!1ses!2spe!4v1668217525966!5m2!1ses!2spe"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="iframe"></iframe>
        </div>
      </div>
      <div class="container col-md-12 col-lg-5 bg-white p-5 rounded-2 shadow-lg mb-md-5 mt-5 mt-md-5 mt-ml-0 mt-xl-0">
        <form class="needs-validation" novalidate="" action="email.php" method="POST" id="form-contact">
          <div class="row g-3">
            <h3>Contactate con nosotros</h3>
            <div class="col-sm-12">
              <label for="nombre" class="form-label">Nombres &nbsp;<label class="text-danger fs-5">*</label></label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese sus datos" value="">
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email &nbsp;<label class="text-danger fs-5">*</label></label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo">
              </div>
            </div>

            <div class="col-12">
              <label for="celular" class="form-label">Celular &nbsp;<label class="text-danger fs-5">*</label></label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese su numero de contacto">
              </div>
            </div>

            <div class="col-12 mb-3">
              <label for="asunto" class="form-label">Asunto &nbsp;<label class="text-danger fs-5">*</label></label>
              <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto">
            </div>
            <div class="form-floating">
              <textarea class="form-control h-100" placeholder="Leave a comment here" id="mensaje" name="mensaje"></textarea>
              <label for="mensaje" class="ps-4">Mensaje</label>
            </div>

            <div class="col-12 mb-3">
              <button class="w-100 btn btn-danger btn-lg" type="submit" id="btnEnviar">Enviar</button>
            </div>
            <label for="mensaje" class="text-danger fs-6">Complete todos los campos (*)</label>
            </div>
        </form>
      </div>
    </div>
  </div>
  <footer class="container-fluid d-flex justify-content-center align-items-center">
    <h1 class="">Copyright © 2022 Todos los derechos reservados por Frarem S.A.C</h1>
  </footer>

  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>