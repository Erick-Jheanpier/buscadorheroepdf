<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Superhéroes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="container mt-4">
    <h2 class="mb-3">Buscador de Superhéroes</h2>

    <input type="text" id="searchHero" class="form-control" placeholder="Escribe el nombre del superhéroe...">

    <div id="resultTable" class="mt-3"></div>

    <script>
        let typingTimer;
        const doneTypingInterval = 1000; // 1 segundo

        $("#searchHero").on("keyup", function () {
            clearTimeout(typingTimer);
            let query = $(this).val();

            typingTimer = setTimeout(function () {
                if (query.length > 0) {
                    $.ajax({
                        url: "<?= site_url('superheroes/search') ?>",
                        method: "GET",
                        data: { name: query },
                        success: function (data) {
                            $("#resultTable").html(data);
                        },
                        error: function (xhr) {
                            $("#resultTable").html(
                                `<div class="alert alert-danger">Error ${xhr.status}: No se pudo obtener resultados.</div>`
                            );
                        }
                    });
                } else {
                    $("#resultTable").html("");
                }
            }, doneTypingInterval);
        });
    </script>
</body>
</html>


