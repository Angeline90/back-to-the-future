<?php require_once 'time.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/alarm-clock" rel="stylesheet">                
    <title>Retour vers le Futur</title>
</head>

<body>
    <table class="destination">
        <tr>
            <th>MONTH</th>
            <th>DAY</th>
            <th>YEAR</th>
            <th>AM/PM</th>
            <th>HOUR</th>
            <th>MINUTE</th>
        </tr>
        <tr>
            <td><?= $destinationTime->format('M') ?></td>
            <td><?= $destinationTime->format('d') ?></td>
            <td><?= $destinationTime->format('Y') ?></td>
            <td><?= $destinationTime->format('A') ?></td>
            <td><?= $destinationTime->format('h') ?></td>
            <td><?= $destinationTime->format('i') ?></td>
        </tr>
    </table>
    <p>DESTINATION TIME</p>

    <table class="present">
        <tr>
            <th>MONTH</th>
            <th>DAY</th>
            <th>YEAR</th>
            <th>AM/PM</th>
            <th>HOUR</th>
            <th>MINUTE</th>
        </tr>
        <tr>
            <td><?= $presentTime->format('M') ?></td>
            <td><?= $presentTime->format('d') ?></td>
            <td><?= $presentTime->format('Y') ?></td>
            <td><?= $presentTime->format('A') ?></td>
            <td><?= $presentTime->format('h') ?></td>
            <td><?= $presentTime->format('i') ?></td>
        </tr>
    </table>
    <p>PRESENT TIME</p>
    <p>Il y a <?= $diff->format('%y ans, %m mois, %d jours, %h heures, %i minutes')?> qui separent ces deux dates.</p>
    <p>Nom de Zeus ! Il y a <?= $minutes?> qui separent ces deux dates. Il faudra <?= $carburant?> litres de carburant pour effectuer ce voyage Doc !</p>
</body>

</html>