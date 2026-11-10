<?php include "header.php"; ?>

<main>
    <section class="portada">
        <h1>Bienvenidos a La Casa Yoga</h1>
        <p>
            Un espacio para conectar con tu cuerpo,
            encontrar equilibrio y disfrutar del bienestar.
        </p>
        <a href="contacto.php" class="boton">Reserva tu clase</a>
    </section>

    <section class="servicios contenedor">
        <h2>Nuestras clases</h2>
        <p>
            Descubrí nuestras diferentes prácticas de yoga
            y encontrá la ideal para vos.
        </p>

        <div class="cards" id="cards"></div>
    </section>

    <section class="galeria contenedor">
        <h2>Nuestro espacio</h2>
        <p>
            Conocé el ambiente de tranquilidad y bienestar
            que te espera en La Casa Yoga.
        </p>

        <div class="fotos">
<img src="img/espacio1.jpg" alt="Interior del estudio de yoga">
<img src="img/espacio2.jpg" alt="Espacio de meditación">
<img src="img/espacio3.jpg" alt="Ambiente relajante del estudio">
        </div>
    </section>

    <section class="preguntas contenedor">
        <h2>Preguntas frecuentes</h2>

        <div class="accordion">
            <div class="item">
                <button class="titulo" type="button">
                    ¿Necesito experiencia para practicar yoga?
                </button>
                <div class="contenido">
                    <p>
                        No. Tenemos clases para principiantes
                        y personas con experiencia.
                    </p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" type="button">
                    ¿Qué debo llevar a mi primera clase?
                </button>
                <div class="contenido">
                    <p>
                        Te recomendamos ropa cómoda, una botella
                        de agua y una esterilla de yoga.
                    </p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" type="button">
                    ¿Cómo puedo reservar una clase?
                </button>
                <div class="contenido">
                    <p>
                        Podés comunicarte con nosotros mediante
                        el formulario de contacto.
                    </p>
                </div>
            </div>

            <div class="item">
                <button class="titulo" type="button">
                    ¿Qué tipos de yoga ofrecen?
                </button>
                <div class="contenido">
                    <p>
                        Ofrecemos diferentes modalidades de yoga
                        para distintos niveles y necesidades.
                        Conocelas en nuestra sección de servicios.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "footer.php"; ?>