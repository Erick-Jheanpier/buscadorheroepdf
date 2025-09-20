<?php if (!empty($heroes)): ?>
    <h5>Resultados para: <strong><?= esc($name) ?></strong></h5>

    <table class="table table-bordered table-striped table-sm mt-2">
        <thead class="table-dark">
            <tr>
                <th>Superhéroe</th>
                <th>Nombre Real</th>
                <th>Género</th>
                <th>Raza</th>
                <th>Editorial</th>
                <th>Alineación</th>
                <th>Ojos</th>
                <th>Cabello</th>
                <th>Piel</th>
                <th>Altura (cm)</th>
                <th>Peso (kg)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($heroes as $h): ?>
                <tr>
                    <td><?= esc($h['SuperHeroe']) ?></td>
                    <td><?= esc($h['NombreReal']) ?></td>
                    <td><?= esc($h['Genero']) ?></td>
                    <td><?= esc($h['Raza']) ?></td>
                    <td><?= esc($h['Editorial']) ?></td>
                    <td><?= esc($h['Alineacion']) ?></td>
                    <td><?= esc($h['ColorOjos']) ?></td>
                    <td><?= esc($h['ColorCabello']) ?></td>
                    <td><?= esc($h['ColorPiel']) ?></td>
                    <td><?= esc($h['AlturaCM']) ?></td>
                    <td><?= esc($h['PesoKG']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Botón Exportar PDF -->
    <a href="<?= base_url('superheroes/exportPdf/' . urlencode($name)) ?>" target="_blank">
    Exportar PDF
</a>


<?php else: ?>
    <div class="alert alert-warning">No se encontraron superhéroes.</div>
<?php endif; ?>


