<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sitio de noticias con las últimas novedades de 2025 - Información actualizada sobre tecnología, ciencia, deportes, economía y más">
    <meta name="author" content="Diario Noticias 2025">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>NOTICIAS SON NOTICIAS 2025 - Información Actualizada del Mundo</title>

    <!-- Google Analytics -->
    <!-- Reemplaza GA_TRACKING_ID con tu ID de seguimiento de Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'GA_TRACKING_ID');
    </script>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/blog/blog.css" rel="stylesheet">
    
    <style>
      /* ESTILOS CORREGIDOS PARA ESPACIO E IMÁGENES */
      .card-img-section {
        height: 180px;
        object-fit: cover;
        width: 100%;
      }
      
      .card-with-image {
        transition: transform 0.3s ease;
        height: 100%;
        margin-bottom: 20px;
      }
      
      .card-with-image:hover {
        transform: translateY(-5px);
      }
      
      .jumbotron-bg {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 400px;
      }
      
      .section-link {
        text-decoration: none;
        color: inherit;
        display: block;
        height: 100%;
      }
      
      .section-link:hover {
        text-decoration: none;
        color: inherit;
      }
      
      .nav-section {
        border-bottom: 2px solid #007bff;
        margin-bottom: 20px;
      }
      
      /* CORRECCIÓN PARA CONTENIDO QUE NO SOBRESALGA */
      .card-body {
        padding: 15px;
        display: flex;
        flex-direction: column;
        height: 100%;
      }
      
      .card-title {
        font-size: 1.1rem;
        line-height: 1.3;
        margin-bottom: 10px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 2.6em;
      }
      
      .card-text {
        font-size: 0.9rem;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 4.2em;
        margin-bottom: 15px;
        flex-grow: 1;
      }
      
      .card-meta {
        font-size: 0.8rem;
        margin-bottom: 10px;
      }
      
      .btn-container {
        margin-top: auto;
      }
      
      /* MEJORAS RESPONSIVAS */
      @media (max-width: 768px) {
        .card-img-section {
          height: 150px;
        }
        
        .card-title {
          font-size: 1rem;
          min-height: 2.4em;
        }
        
        .card-text {
          font-size: 0.85rem;
          min-height: 3.8em;
        }
      }
      
      /* GARANTIZAR QUE LAS IMÁGENES SE CARGUEN */
      img {
        max-width: 100%;
        height: auto;
      }
      
      .fallback-image {
        background: linear-gradient(45deg, #f8f9fa, #e9ecef);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6c757d;
        font-size: 0.8rem;
      }

      /* Estilos para Google AdSense (opcional) */
      .ad-container {
        margin: 20px 0;
        text-align: center;
        background: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">
              <h1>NOTICIAS SON NOTICIAS 2025</h1>
              <p class="lead">Tu fuente confiable de información actualizada sobre los acontecimientos más importantes del mundo</p>
            </a>
          </div>
        </div>
      </header>

      <!-- Navegación Rápida a Secciones -->
      <nav class="nav-section py-2">
        <div class="text-center">
          <small class="text-muted">Navegación rápida: </small>
          <a href="#internacional" class="badge badge-primary mx-1">Internacional</a>
          <a href="#nacional" class="badge badge-success mx-1">Nacional</a>
          <a href="#tecnologia" class="badge badge-info mx-1">Tecnología</a>
          <a href="#deportes" class="badge badge-warning mx-1">Deportes</a>
          <a href="#economia" class="badge badge-secondary mx-1">Economía</a>
        </div>
      </nav>

      <!-- Banner de Google AdSense (opcional) -->
      <!-- <div class="ad-container">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-TU_ID_DE_ADSENSE"
             crossorigin="anonymous"></script>
      </div> -->

      <!-- Portada Principal -->
      <?php include("secciones/portada.php"); ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark jumbotron-bg">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic">
            <?php echo $portada["titulo"]; ?>
          </h1>
          <p class="lead my-3">
            <?php echo $portada["resumen"]; ?>
          </p>
          <p class="lead mb-0">
            <a href="#portada" class="text-white font-weight-bold" onclick="gtag('event', 'click', {'event_category': 'Portada', 'event_label': 'Continuar leyendo'});">Continuar leyendo...</a>
          </p>
        </div>
      </div>

      <!-- Fila 1: Internacional y Nacional -->
      <?php
        include("secciones/internacional.php");
        include("secciones/nacional.php");
      ?>
      <div class="row mb-4" id="internacional">
        <div class="col-md-6">
          <a href="secciones/internacional.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Internacional', 'event_label': 'Noticia Internacional'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <!-- IMAGEN CON FALLBACK SI NO SE CARGA -->
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1551135049-8a33b5883817?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Internacional" 
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Internacional</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
                <h4 class="card-title">
                  <?php echo $internacional["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $internacional["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $internacional["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-primary btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-md-6" id="nacional">
          <a href="secciones/nacional.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Nacional', 'event_label': 'Noticia Nacional'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Nacional"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Nacional</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Nacional</strong>
                <h4 class="card-title">
                  <?php echo $nacional["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $nacional["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $nacional["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-success btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Fin Fila 1 -->

      <!-- Fila 2: Economía y Opinión -->
      <?php
        include("secciones/economia.php");
        include("secciones/opinion.php");
      ?>
      <div class="row mb-4" id="economia">
        <div class="col-md-6">
          <a href="secciones/economia.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Economía', 'event_label': 'Noticia Economía'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1665686374006-b8f04cf62d57?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Economía"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Economía</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-secondary">Economía</strong>
                <h4 class="card-title">
                  <?php echo $economia["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $economia["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $economia["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-secondary btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="secciones/opinion.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Opinión', 'event_label': 'Artículo Opinión'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Artículo de Opinión"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Opinión</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-warning">Opinión</strong>
                <h4 class="card-title">
                  <?php echo $opinion["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $opinion["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $opinion["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-warning btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Fin Fila 2 -->

      <!-- Fila 3: Tecnología y Ciencia -->
      <?php
        include("secciones/tecnologia.php");
        include("secciones/ciencia.php");
      ?>
      <div class="row mb-4" id="tecnologia">
        <div class="col-md-6">
          <a href="secciones/tecnologia.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Tecnología', 'event_label': 'Noticia Tecnología'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2080&q=80" class="card-img-section" alt="Noticia Tecnología"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Tecnología</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Tecnología</strong>
                <h4 class="card-title">
                  <?php echo $tecnologia["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $tecnologia["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $tecnologia["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-primary btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="secciones/ciencia.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Ciencia', 'event_label': 'Noticia Ciencia'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Ciencia"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Ciencia</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Ciencia</strong>
                <h4 class="card-title">
                  <?php echo $ciencia["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $ciencia["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $ciencia["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-success btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Fin Fila 3 -->

      <!-- Fila 4: Cultura y Gente -->
      <?php
        include("secciones/cultura.php");
        include("secciones/gente.php");
      ?>
      <div class="row mb-4">
        <div class="col-md-6">
          <a href="secciones/cultura.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Cultura', 'event_label': 'Noticia Cultura'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Cultura"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Cultura</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-secondary">Cultura</strong>
                <h4 class="card-title">
                  <?php echo $cultura["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $cultura["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $cultura["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-secondary btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="secciones/gente.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Gente', 'event_label': 'Noticia Gente'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Gente"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Gente</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-warning">Gente</strong>
                <h4 class="card-title">
                  <?php echo $gente["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $gente["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $gente["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-warning btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Fin Fila 4 -->

      <!-- Fila 5: Deportes, Televisión y Video -->
      <?php
        include("secciones/deportes.php");
        include("secciones/television.php");
        include("secciones/video.php");
      ?>
      <div class="row mb-4" id="deportes">
        <div class="col-md-4">
          <a href="secciones/deportes.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Deportes', 'event_label': 'Noticia Deportes'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Deportes"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Deportes</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Deportes</strong>
                <h4 class="card-title">
                  <?php echo $deportes["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $deportes["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $deportes["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-primary btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="secciones/television.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Televisión', 'event_label': 'Noticia Televisión'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1593784991095-a205069470b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Televisión"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Televisión</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Televisión</strong>
                <h4 class="card-title">
                  <?php echo $television["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $television["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $television["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-success btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="secciones/video.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Video', 'event_label': 'Contenido Video'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Video"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Video</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-info">Video</strong>
                <h4 class="card-title">
                  <?php echo $video["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $video["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $video["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-info btn-sm">Ver video</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Fin Fila 5 -->

      <!-- Fila 6: Formación, Empleo y Sociedad -->
      <?php
        include("secciones/formacion.php");
        include("secciones/empleo.php");
        include("secciones/sociedad.php");
      ?>
      <div class="row mb-4">
        <div class="col-md-4">
          <a href="secciones/formacion.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Formación', 'event_label': 'Noticia Formación'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Formación"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Formación</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Formación</strong>
                <h4 class="card-title">
                  <?php echo $formacion["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $formacion["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $formacion["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-primary btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="secciones/empleo.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Empleo', 'event_label': 'Noticia Empleo'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1551834310-01a2e47ed0d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Empleo"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Empleo</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Empleo</strong>
                <h4 class="card-title">
                  <?php echo $empleo["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $empleo["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $empleo["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-success btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="secciones/sociedad.php" class="section-link" onclick="gtag('event', 'click', {'event_category': 'Sociedad', 'event_label': 'Noticia Sociedad'});">
            <div class="card flex-md-row mb-4 shadow-sm card-with-image">
              <div style="position: relative; width: 100%;">
                <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-section" alt="Noticia Sociedad"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="card-img-section fallback-image" style="display: none;">Imagen Sociedad</div>
              </div>
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-secondary">Sociedad</strong>
                <h4 class="card-title">
                  <?php echo $sociedad["titulo"]; ?>
                </h4>
                <div class="card-meta text-muted">
                  <?php echo $sociedad["autor"]; ?> - <?php echo date('d M'); ?>
                </div>
                <p class="card-text">
                  <?php echo $sociedad["resumen"]; ?>
                </p>
                <div class="btn-container">
                  <span class="btn btn-secondary btn-sm">Leer más</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Fin Fila 6 -->

    </div>

    <footer class="blog-footer">
      <p