<?php
    define("TITLE", "Inicio - Vodkaholic! | Barra Móvil");
    include('includes/head.php');
?>

<div id="body-loaded">
    <div class="wp"><a href="#formulario"><img src="./img/contact/iconfinder_whatsapp_287615.png"></a></div> <!--  habría que cambiar la función del icono de whatsapp como para que envíe un msj  -->

    <header id="header">
        <!-- header desktop -->
        <div id="header_desktop" class="headers">
            <div class="logo1 logos"></div>
            <nav class="center">
                <?php include('includes/nav.php'); ?>
            </nav>
        </div>

        <!-- header mobile -->
        <div id="header_mobile" class="headers">
           <div class="center" id="menu_icon" onclick="openNav()"><img src="./icon/menu.png" alt=""></div>
            <div class="center" style="display: flex; justify-content:center;"><h1>Vodkaholic!</h1><h3>&nbsp;Barra Móvil</h3></div>
            <div class="logo3 logos center"></div>
            <div id="mySidenav" class="sidenav">
                <nav>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <?php include('includes/nav.php'); ?>
                </nav>
            </div> 
        </div>
    </header>

    <main>
        <div class="banner banner_1"></div>

        <section id="nosotros">
            <div class="title title-first"><h1>Nosotros</h1></div>
            <div class="display display_us">
                <div class="us">
                    <h2>Quiénes Somos</h2>
                    <p>Somos un emprendimiento moderno dedicado a satisfacer las necesidades de tu evento con <em>la mejor onda</em>. Personalizamos cada servicio a la medida de lo que nuestros clientes necesitan, con el fin de que sus invitados disfruten de una fiesta inolvidable.</p>
                </div>
                <div class="logo2 logos center"></div>
                <div class="us">
                    <h2 style="text-align: end;">Nuestra Historia</h2>
                    <p>En nuestra familia, la elaboración y disfrute de los alimentos y bebidas siempre tuvieron un papel fundamental. Desde pequeños, nuestros padres nos cultivaron el placer por los sabores. Y así fue como la curiosidad nos llevó a estudiar el arte de preparar tragos.
                    </p>
                </div>
            </div>    
        </section>

        <section id="servicios">
            <div class="title"><h1>Servicios y Modalidades</h1></div>
            <div class="display">
                <div class="serv">
                    <h3>Nacional</h3>
                    <p>Esta modalidad cuenta con bebidas de origen nacional. Cervezas, aperitivos y cóctails básicos.</p>
                    <p><em><strong>Extras:</strong></em> Alquiler de choperas con una o dos canillas, barriles de cerveza artesanal, ¡y mucho más!</p> 
                </div>
                <div class="serv">
                    <h3>Plus Internacional</h3>
                    <p>Este servicio agrega insumos de origen internacional. ¡Te ofrecemos la mejor calidad en brebajes importados!</p>
                </div>
                <div class="serv">
                    <h3>Plus Autor</h3>
                    <p>Si querés contratar un servicio que cuente con cóctails originales y de autor, ¡esta es tu opción! Tenemos diferentes aperitivos interesantes para que tu evento sea inolvidable.</p>
                </div>
                <div class="serv">
                    <h3>Alcohol-Free!</h3>
                    <p>Este servicio es excelente para eventos con menores. Milkshakes, cóctails sin alcohol, jugos y licuados.</p>
                </div>
                <div id="plus">
                    <h2>¿Qué más te ofrecemos?</h2>
                    <p>Brindamos equipamiento completo para la elaboración de los tragos, bartenders profesionales, servicio de cristalería, descartables y todo lo que necesites para que tu evento sea ideal.</p>
                    <p>Nuestro servicio ofrece dos modalidades de contratación a coordinar:</p>
                    <ul>
                        <li><em>Barra Libre:</em> ¡Consumís lo que querés!</li>
                        <li><em>Cóctails Fijos:</em> Podés elegir la cantidad de tragos que tu evento requiera.</li>
                        <li><em>Sólo barmans:</em> Vos mismo podés proporcionar las bebidas y nosotros te preparamos los cócteles que desees.</li>
                    </ul>
                    <br>
                    <hr>
                    <div class="center"><strong>¡HACEMOS EL EVENTO A TU MEDIDA!</strong> <em>¡No dudes en consultarnos!</em></div>
                    <br>
                    <p class="center">Armamos un presupuesto personalizado de acuerdo a lo que necesites. Los servicios son combinables.</p>
                </div>
            </div>
        </section>

        <section id="fotos">
            <div class="title"><h1>Fotos</h1></div>
            <div id="events">
                <h3>Eventos</h3>
                <div class="pics_event"></div>
                <div class="pics_event"></div>
                <div class="pics_event no-show"></div>
                <div class="pics_event no-show"></div>
                <div class="pics_event no-show"></div>
                <div class="pics_event no-show"></div>
            </div>

            <div id="drinks">
                <h3>Algunos de nuestros cóctails</h3>
                <div class="pics_drink"><div class="name"><p>Trago de Autor 1</p></div></div>
                <div class="pics_drink"><div class="name"><p>Trago de Autor 2</p></div></div>
                <div class="pics_drink no-show"><div class="name"><p>Trago de Autor 3</p></div></div>
                <div class="pics_drink no-show"><div class="name"><p>Trago de Autor 4</p></div></div>
            </div>
        </section>

        <section id="formulario">
            <h1 class="center">¡Contanos lo que buscás y nosotros te enviaremos un presupuesto de acuerdo a tus necesidades!</h1>

            <form action="form.php" method="get" id="contact-form">

                <label for="name">Nombre y Apellido: </label><input type="text" name="name" id="name-form" requested placeholder="Natalia Natalia" minlength="4" spellcheck="false"> <!-- Nombres -->

                <label for="email">Email: </label><input type="email" name="email" id="email-form" requested placeholder="ejemplo@mail.com" spellcheck="false"> <!-- Email -->

                <label for="msg">Consulta: </label><textarea type="text" name="msg" id="msg-form" requested placeholder="Escribinos aquí qué tipo de servicio buscás." minlength="10" spellcheck="false"></textarea> <!-- Consulta -->

                <input type="submit" name="contact-submit" value="Enviar" id="boton-enviar"> <!-- Botón ENVIAR -->

            </form>
            
            <div id="deco">
                <div class="logo2 logos" id="abajo"></div>
                <div class="drinks-icons"><img src="icon/iconfinder_8_1845729.png" alt=""><img src="icon/iconfinder_12_1845732.png" alt=""></div>
            </div>    
        </section>

        <div class="banner banner_2"></div>

<?php
    include('includes/footer.php');
?>

</div>