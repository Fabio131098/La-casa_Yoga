<?php include "header.php"; ?>

<main class="contenedor">
    <section class="contacto">
        <h1>Contactá con La Casa Yoga</h1>

        <p>
            ¿Querés reservar una clase o recibir más información?
            Completá el formulario y con gusto te ayudaremos.
        </p>

        <form action="enviar.php" method="post" class="formulario" id="formulario" novalidate>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="mensaje">Mensaje o clase de interés:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

            <p id="mensajes" aria-live="polite"></p>

            <button type="submit" class="boton">Enviar mensaje</button>
        </form>
    </section>
</main>

<?php include "footer.php"; ?>