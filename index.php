<?php 

if(isset($_POST['eviarcorreo'])){
    $nombre         = $_POST['nombre'];
     $correo        = $_POST['correo'];
     $telefono      = $_POST['telefono'];
     $msg           = $_POST['msg'];
  
    try{
      require_once("configuracionemail.php");
  
      $mail->setFrom($_POST['correo']); 
      $mail->addAddress($_POST['correo']); 
  
      $mail->isHTML(true);
      $mail->Subject = 'Compra en FERRARI';
      $mail->Body = "<h2>Hola $nombre, su mensaje de conctato hacia Augusto Ferrari fue enviado con exito.</h2> <br> Su respuesta sera enviado lo antes posible<br>";
  
      $mail->send();
      $alert = '<div class="alert-success">
                   <span>Enviado con exito, Pueder revisar tu bandeja de entrada para comprobar.</span>
                  </div>';
    } catch (Exception $e){
      $alert = '<div class="alert-error">
                  <span>'.$e->getMessage().'</span>
                </div>';
    }
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Augusto | Portfolio</title>
    <link rel="stylesheet" href="../css/estiloindex.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="../img/firma.jpg">
    <meta name="description" content="Portfolio de Augusto Ferrari">
    <meta name="author" content="Augusto Ferrari">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    .diplo {
        color: rgb(233, 255, 31);
        margin-top: 40px;
        font-size: 29px;
        margin-bottom: 20px;
        margin-right: 50px;
    }

    .imgdiploma {
        width: 30%;
        height: 30%;
    }
</style>
<body>
    <header>
        <nav class="navbar">
            <ul class="navpos">
                <li class="agus">Augusto Ferrari</li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#skill">SKILL</a></li>
                <li><a href="#proyectos">PROYECTOS</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
            </ul>
        </nav>
        <div class="about" id="about">
            <img  class="person" src="../img/personprog.png" alt="">
            <h1 class="maintilte">AUGUSTO FERRARI</h1>
            <h2 class="mainabout">Mi nombre es Augusto Ferrari, tengo 17 años y este es mi PORTFOLIO. Soy un estudiante secundaria en Carmelo - Colonia, Uruguay, en la misma hago la especificación de CIENTIFICO, Soy estudiante en el ANGLO un instituto privado de ingles de Cambridge, en el mismo estoy en un nivel avanzado Senior 6, además estoy realice un curso en MiTaller sobre MySQL y PHP, aparte ya tengo conocimientos bastantes avanzados sobre HTML y CSS. Soy responsable y me gusta programar, esto hace que le dedique muchas horas a crear cosas sola mente para tomar mas practica y aprender algo nuevo. Me considero una persona ágil en el mundo de la programación ya que aprendo muy rápido y siempre se ingeniármelas para crear o hacer algo con mis conocimientos o herramientas. Siempre resuelvo los problemas que ocurren y no los cambio por otro. Me gusta hacer las cosas con mi código, no lo copio puedo basarme en alguno pero lo hago propio.</h1>
        </div>
    </header>
    <main>
        <section class="fondoskills">
            <hr>
            <div class="skills" id="skill">
                <h1 class="skilltext animado" >My Skills</h1>
                <ul class="lista" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h1 class="estudios">ESTUDIOS</h1>
                    <li class="listap">TERMINADO</li>
                        <ul>
                            <li>Primaria</li>
                            <br>
                            <li>Curso MySQL y PHP</li>
                        </ul>
                    <li class="listap2">CURSANDO</li>
                        <ul>
                            <li>Bachillerato 6to CIENTIFICO</li>
                            <br>
                            <li>Curso de Java Script</li>
                        </ul>
                    <li class="listap3">A REALIZAR</li>
                        <ul>
                            <li>Ingenieria en SISTEMA en la ORT - MVDEO</li>
                            <br>
                            <li>Master en Gerencia</li>
                        </ul>
                </ul>
                    <ul class="lista2" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <h1 class="apren">APRENDISAJE</h1>
                        <li class="listal">MAQUETACION</li>
                            <ul>
                                <li>HTML -</li>
                                <li>CSS</li>
                            </ul>
                        <li class="listal2">LENGUAJE</li>
                            <ul>
                                <li>LUA -</li>
                                <li>JS</li>
                            </ul>
                        <li class="listal3">DATABASE</li>
                            <ul>
                                <li>PHP -</li>
                                <li>MYSQL</li>
                            </ul>
                    </ul>
                    <div class="xp" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <ul class="lista3" >
                            <h1 class="exp">EXPERIENCIA</h1>
                            <li class="listae">HTML - CSS</li>
                                <ul>
                                    <li>2 AÑOS</li>
                                </ul>
                            <li class="listae2">JS - LUA</li>
                                <ul>
                                    <li>JS 1 MESES</li>
                                    <br>
                                    <li>LUA 2 AÑOS Y MEDIO</li>
                                </ul>
                            <li class="listae3">PHP - MYSQL</li>
                                <ul>
                                    <li>2 SEMANAS</li>
                                </ul>
                        </ul>
                    </div>
                    <ul class="lista2" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <h1 class="diplo">DIPLOMAS</h1>
                        <img class="imgdiploma" src="../img/phpcer.png" alt="">
                    </ul>
            </div>
        </section>
        <section class="fondopro" id="proyectos">
            <h1 class="protext" >Proyectos</h1>
            <a target="_blank"><div class="container-fluid bannerarg" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h3>Ferrari`s Automobiliaria</h3><br>
                <p>Ferrari`s Automobiliaria es una pagina web como mercado libre pero solo de autos, en la misma las personas pueden publicar sus autos, tener su cuenta, comprar y mas. La misma cuenta con un sistema de empleado para administrar la misma</p>
            </div></a>
        </section>
        <section class="contactof">
            <hr>
            <div id="contacto" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <form action="" method="post">
                    <h3>Contacto</h3>
                    <input name="nombre" placeholder="Nombre" required>
                    <input name="correo" placeholder="Correo" required>
                    <input name="telefono" placeholder="Telefono" required>
                    <textarea name="msg" placeholder="Escribe Aqui" required></textarea>
                    <input type="hidden" id="eviarcorreo" name="eviarcorreo" value="eviarcorreo">
                    <input id="botoncontacto" type="submit" value="ENVIAR" class="btn2 btn--3">
                </form>
            </div>
            <hr class="conhr">
        </section>
    </main>
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="nombrefotter">Augusto Ferrari</h2>
            </div>
            <div class="social-media">
                <a href="https://mail.google.com/mail/u/0/?fs=1&to=aguferrari100@gmail.com&su=CONTACTO&body=Buenas,%20augusto...&bcc=augustferrari1@gmail.com&tf=cm" target="_blank" class="social-media-icon">
                    <i class='bx bxl-google' ></i>
                </a>
                <a href="https://wa.me/092150899" target="_blank" class="social-media-icon">
                    <i class='bx bxl-whatsapp' ></i>
                </a>
                <a href="https://www.instagram.com/aguferrari1/" target="_blank" class="social-media-icon">
                    <i class='bx bxl-instagram' ></i>
                </a>
                <a class="social-media-icon">
                    <i class='bx bx-clipboard' onclick="info()" ></i>
                </a>
                <a class="social-media-icon">
                    <i class='bx bx-' ></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/alertas.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>