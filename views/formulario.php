<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2 class="mb-4 text-center">Contáctanos</h2>
            <p class="text-center">¡Envíanos un mensaje por WhatsApp!</p>
            
            <form id="whatsapp-form">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-personalizado">Enviar Mensaje por WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    document.getElementById('whatsapp-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe de la forma tradicional

        // 1. Obtener los valores de los campos
        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const mensaje = document.getElementById('mensaje').value;

        // 2. Crear el mensaje para WhatsApp
        const texto = `Hola, mi nombre es ${nombre}. Me comunico desde la web.\n\nCorreo: ${email}\n\nMensaje:\n${mensaje}`;

        // 3. Codificar el mensaje para la URL
        const textoCodificado = encodeURIComponent(texto);

        // 4. Construir la URL de WhatsApp
        const telefono = '+542984527814'; // ¡Reemplaza con tu número de teléfono!
        const urlWhatsapp = `https://wa.me/${telefono}?text=${textoCodificado}`;

        // 5. Abrir WhatsApp en una nueva pestaña
        window.open(urlWhatsapp, '_blank');
    });
</script>