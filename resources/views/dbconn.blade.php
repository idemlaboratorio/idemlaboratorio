<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idem - Citas y Cotizaciones para Laboratorio Médico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Idem - Laboratorio Médico</h1>
            <nav>
                <ul class="menu">
                    <li><a href="#registro">Registro</a></li>
                    <li><a href="#login">Login</a></li>
                    <li><a href="#catalogo">Catálogo de Exámenes</a></li>
                    <li><a href="#citas">Citas</a></li>
                    <li><a href="#cotizaciones">Cotizaciones</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Página de inicio con imagen de fondo -->
        <section class="hero">
            <img src="https://www.medvidasalud.com/wp-content/uploads/que-es-un-laboratorio-clinico-medvida-salud.webp" alt="Laboratorio" class="background-image">
            <div class="hero-text">
                <h2>Bienvenido a Idem</h2>
                <p>Realiza tus citas y cotizaciones para análisis de laboratorio de forma rápida y sencilla.</p>
            </div>
        </section>

        <!-- Sección de Registro -->
        <section id="registro" class="form-section">
            <h2>Registro de Usuario</h2>
            <form>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" required>

                <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha-nacimiento" required>

                <label for="eps">Afiliación a EPS:</label>
                <input type="text" id="eps">

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion">

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono">

                <button type="submit">Registrar</button>
            </form>
        </section>

        <!-- Sección de Login -->
        <section id="login" class="form-section">
            <h2>Login</h2>
            <form>
                <label for="tipo-usuario">Tipo de Usuario:</label>
                <select id="tipo-usuario">
                    <option value="paciente">Paciente</option>
                    <option value="profesional">Profesional</option>
                </select>

                <label for="correo-login">Correo Electrónico:</label>
                <input type="email" id="correo-login" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" required>

                <button type="submit">Iniciar Sesión</button>
            </form>
        </section>

        <!-- Catálogo de Exámenes -->
        <section id="catalogo" class="catalog-section">
            <h2>Catálogo de Exámenes</h2>
            <div class="catalog-grid">
                <div class="catalog-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ5oeQmty_sMyE9vkVgbdQrDl3JQ_QbZN8nA&s" alt="Colesterol">
                    <h3>Colesterol</h3>
                </div>
                <div class="catalog-item">
                    <img src="https://image.tuasaude.com/media/article/ls/yo/hemograma_30347_l.jpg" alt="Hemograma">
                    <h3>Hemograma</h3>
                </div>
                <div class="catalog-item">
                    <img src="https://www.gaceta.unam.mx/wp-content/uploads/2022/03/220303-aca7-des-f1-glucosa-sangre.jpg" alt="Glucosa">
                    <h3>Glucosa</h3>
                </div>
                <div class="catalog-item">
                    <img src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_curiosidad__small/public/media/0d/articulos/creatinina_fallo_renal_0.jpg.webp" alt="Creatinina">
                    <h3>Creatinina</h3>
                </div>
                <div class="catalog-item">
                    <img src="https://labchemdepot.com/wp-content/uploads/2022/04/Amarillo-Moderno-Foto-Calle-Viajes-Revista-Portada-7-scaled.jpg" alt="Hemoglobina Glicosilada">
                    <h3>Hemoglobina Glicosilada</h3>
                </div>
                <div class="catalog-item">
                    <img src="https://labmas.com.mx/wp-content/uploads/2019/07/uroanalisis.jpg" alt="Uroanálisis">
                    <h3>Uroanálisis</h3>
                </div>
            </div>
        </section>

        <!-- Sección de Citas -->
        <section id="citas" class="form-section">
            <h2>Citas</h2>
            <form>
                <label for="examen">Elige un Examen:</label>
                <select id="examen">
                    <option value="colesterol">Colesterol</option>
                    <option value="hemograma">Hemograma</option>
                    <option value="glucosa">Glucosa</option>
                    <option value="creatinina">Creatinina</option>
                    <option value="hemoglobina">Hemoglobina Glicosilada</option>
                    <option value="uroanalisis">Uroanálisis</option>
                </select>

                <label for="fecha-cita">Fecha de la Cita:</label>
                <input type="date" id="fecha-cita" required>

                <label for="hora-cita">Hora de la Cita:</label>
                <input type="time" id="hora-cita" required>

                <button type="submit">Agendar Cita</button>
            </form>
        </section>

        <!-- Sección de Cotizaciones -->
        <section id="cotizaciones" class="catalog-section">
            <h2>Cotizaciones</h2>
            <div class="catalog-grid">
                <div class="catalog-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ5oeQmty_sMyE9vkVgbdQrDl3JQ_QbZN8nA&s" alt="Colesterol">
                    <h3>Colesterol</h3>
                    <button>Ver Preparación y Precio</button>
                </div>
                <div class="catalog-item">
                    <img src="https://image.tuasaude.com/media/article/ls/yo/hemograma_30347_l.jpg" alt="Hemograma">
                    <h3>Hemograma</h3>
                    <button>Ver Preparación y Precio</button>
                </div>
                <div class="catalog-item">
                    <img src="https://www.gaceta.unam.mx/wp-content/uploads/2022/03/220303-aca7-des-f1-glucosa-sangre.jpg" alt="Glucosa">
                    <h3>Glucosa</h3>
                    <button>Ver Preparación y Precio</button>
                </div>
                <div class="catalog-item">
                    <img src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_curiosidad__small/public/media/0d/articulos/creatinina_fallo_renal_0.jpg.webp" alt="Creatinina">
                    <h3>Creatinina</h3>
                    <button>Ver Preparación y Precio</button>
                </div>
                <div class="catalog-item">
                    <img src="https://labchemdepot.com/wp-content/uploads/2022/04/Amarillo-Moderno-Foto-Calle-Viajes-Revista-Portada-7-scaled.jpg" alt="Hemoglobina Glicosilada">
                    <h3>Hemoglobina Glicosilada</h3>
                    <button>Ver Preparación y Precio</button>
                </div>
                <div class="catalog-item">
                    <img src="https://labmas.com.mx/wp-content/uploads/2019/07/uroanalisis.jpg" alt="Uroanálisis">
                    <h3>Uroanálisis</h3>
                    <button>Ver Preparación y Precio</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Idem - Laboratorio Médico. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
<style>
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #F5F5F5;
    color: #333;
}

/* Encabezado */
header {
    background-color: #2A9D8F;
    color: #FFF;
    padding: 20px 0;
    text-align: center;
}

.header-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-container h1 {
    margin: 0;
    font-size: 2rem;
}

.menu {
    list-style: none;
    display: flex;
    gap: 15px;
}

.menu li a {
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border: 2px solid white;
    border-radius: 5px;
}

.menu li a:hover {
    background-color: white;
    color: #2A9D8F;
}

/* Sección de bienvenida */
.hero {
    position: relative;
    text-align: center;
    color: white;
}

.background-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    opacity: 0.6;
}

.hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

/* Formulario de registro y login */
.form-section {
    background-color: white;
    padding: 40px;
    margin: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    max-width: 800px;
    margin: 40px auto;
}

form {
    display: grid;
    gap: 15px;
}

form label {
    font-weight: bold;
}

form input, form select, form button {
    padding: 10px;
    border: 2px solid #D1D1D1;
    border-radius: 5px;
    margin-bottom: 10px;
}

form button {
    background-color: #2A9D8F;
    color: white;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #21867A;
}

/* Catálogo */
.catalog-section {
    background-color: white;
    padding: 40px;
    margin: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    max-width: 1200px;
    margin: 40px auto;
}

.catalog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.catalog-item {
    background-color: #F5F5F5;
    padding: 20px;
    text-align: center;
    border: 2px solid #D1D1D1;
    border-radius: 10px;
}

.catalog-item img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 10px;
}

.catalog-item button {
    background-color: #2A9D8F;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.catalog-item button:hover {
    background-color: #21867A;
}

/* Pie de página */
footer {
    background-color: #2A9D8F;
    color: white;
    text-align: center;
    padding: 10px 0;
}

</style>