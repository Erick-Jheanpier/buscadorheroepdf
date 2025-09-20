<?php

?>

<style>
    body { font-family: Arial, sans-serif; font-size: 12px; }
    h2 { text-align: center; margin-bottom: 20px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    th, td { border: 1px solid #000; padding: 4px; text-align: center; }
    th { background-color: #eee; }
</style>

<h2>Listado de Superhéroes</h2>
<p style="text-align:center;">Resultados para: <strong><?= esc($name) ?></strong></p>

<table>
    <thead>
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
        <?php if (!empty($heroes)): ?>
            <?php foreach($heroes as $h): ?>
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
        <?php else: ?>
            <tr><td colspan="11">No se encontraron resultados</td></tr>
        <?php endif; ?>
    </tbody>
</table>
