<!doctype html>
<html lang="es">

<head>
    <title>Correo</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="css/estilos.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-md-7 col-lg-5">
            <div class="card card-custom p-4">
                <div class="card-body">
                    <h3 class="card-title">Envio Correo Electronico</h3>
                    <form action="../public/enviar.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="remitente" class="form-label">Desde (Remitente)</label>
                            <input type="email" class="form-control" id="remitente" name="remitente"
                                value="joseph.sanchez@istvidanueva.edu.ec" readonly required />
                        </div>
                        <div class="mb-3">
                            <label for="destinatario" class="form-label">Para (Destinatario)</label>
                            <input type="email" class="form-control" id="destinatario" name="destinatario" required />
                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="asunto" name="asunto" required />
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="archivo" class="form-label">Adjuntar archivo</label>
                            <input type="file" class="form-control" id="archivo" name="archivo" />
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mostrar SweetAlert si el correo fue enviado correctamente
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('success') === '1') {
            Swal.fire({
                icon: 'success',
                title: '¡Correo enviado!',
                text: 'El mensaje se envió correctamente.',
                confirmButtonColor: '#00adb5'
            }).then(() => {
                // Limpiar el parámetro de la URL sin recargar la página
                window.history.replaceState({}, document.title, window.location.pathname);
            });
        }
    </script>
</body>

</html>