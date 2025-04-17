<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre Uvas y Café</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
          :root {
        --primary-color: #7B2CBF; /* Morado personalizado */
        --primary-color-hover: #6a1bb1; /* Un tono más oscuro para hover */
    }

    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: #fff;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: var(--primary-color-hover);
        border-color: var(--primary-color-hover);
        color: #fff;
    }
        .navbar {
            background-color: #7B2CBF;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        footer a i {
    transition: color 0.3s ease;
}

footer a:hover i {
    color: #e0c8f0;
}

.responsive-map {
    position: relative;
    padding-bottom: 56.25%; /* Proporción 16:9 */
    height: 0;
    overflow: hidden;
    border-radius: 12px; /* opcional, bordes redondeados */
}

.responsive-map iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
       
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Entre Uvas y Café</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#quienes-somos">¿Quiénes somos?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="text-center p-5" style="background-image: url('{{ asset('https://mavipedrero.com/wp-content/uploads/2020/03/img_5198.jpg?w=1000') }}'); background-size: cover; color: white;">
        <div class="container">
            <h1 class="display-4">Bienvenidos a Entre Uvas y Café</h1>
            <p class="lead">Siente el sabor de lo casero y artesanal</p>
            <a href="https://wa.me/56984230531" class="btn btn-primary btn-lg">Contáctanos por WhatsApp</a>
        </div>
    </section>

    <!-- Productos -->
    <section id="productos" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Nuestros Productos</h2>
            <div class="row">
                <!-- Ejemplo producto -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('https://sehablacafe.com/wp-content/uploads/2021/11/usos-del-cafe-en-la-reposteria.jpg') }}" class="card-img-top" alt="Cupcake">
                        <div class="card-body">
                            <h5 class="card-title">Cupcakes</h5>
                            <p class="card-text">Deliciosos y decorados artesanalmente.</p>
                        </div>
                    </div>
                </div>
                <!-- Puedes duplicar los bloques según tus productos -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('https://sehablacafe.com/wp-content/uploads/2021/11/usos-del-cafe-en-la-reposteria.jpg') }}" class="card-img-top" alt="Cupcake">
                        <div class="card-body">
                            <h5 class="card-title">Cupcakes</h5>
                            <p class="card-text">Deliciosos y decorados artesanalmente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('https://sehablacafe.com/wp-content/uploads/2021/11/usos-del-cafe-en-la-reposteria.jpg') }}" class="card-img-top" alt="Cupcake">
                        <div class="card-body">
                            <h5 class="card-title">Cupcakes</h5>
                            <p class="card-text">Deliciosos y decorados artesanalmente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería -->
    <section id="galeria" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Galería</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('https://sehablacafe.com/wp-content/uploads/2021/11/usos-del-cafe-en-la-reposteria.jpg') }}" class="img-fluid rounded mb-3" alt="Galería 1">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('https://sehablacafe.com/wp-content/uploads/2021/11/usos-del-cafe-en-la-reposteria.jpg') }}" class="img-fluid rounded mb-3" alt="Galería 2">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('https://sehablacafe.com/wp-content/uploads/2021/11/usos-del-cafe-en-la-reposteria.jpg') }}" class="img-fluid rounded mb-3" alt="Galería 3">
                </div>
            </div>
        </div>
    </section>

    <!-- ¿Quiénes somos? -->
    <section id="quienes-somos" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">¿Quiénes somos?</h2>
            <p>Somos un emprendimiento familiar que nació del amor por el café y la pastelería. Creemos en lo artesanal, en lo hecho con cariño, y queremos compartirlo contigo.</p>
        </div>
    </section>

   <!-- Ubicación y horario -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Dónde estamos</h2>
        <p>Horario de atención: Lunes a Sábado - 10:00 a 19:00 hrs</p>
        <div class="responsive-map mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.8914148540318!2d-71.44806859115043!3d-32.57619776316639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689bb347784219b%3A0x239ead37eadb199d!2sCachagua%20174%2C%202060337%20Cachagua%2C%20Zapallar%2C%20Valpara%C3%ADso!5e0!3m2!1ses-419!2scl!4v1744828629650!5m2!1ses-419!2scl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

    <!-- Formulario de contacto -->
    <section id="contacto" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contáctanos</h2>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form method="POST" action="{{ route('contacto.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea name="mensaje" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>


   <!-- Footer -->
<footer class="text-center py-4" style="background-color: #8d59bb; color: white;">
    <p class="mb-2 mb-md-0">Entre Uvas y Café | +56 9 8423 0531</p>
    <div class="d-flex justify-content-center gap-3 mt-2">
        <a href="https://facebook.com/entreuvasycafe" class="text-white" target="_blank">
            <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://instagram.com/entreuvasycafe" class="text-white" target="_blank">
            <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a href="https://wa.me/56984230531" class="text-white" target="_blank">
            <i class="fab fa-whatsapp fa-2x"></i>
        </a>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>