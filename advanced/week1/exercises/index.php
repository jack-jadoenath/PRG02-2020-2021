<?php require_once "includes/initialize.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Albums list</title>
</head>

<body>
    <h1>Albums Advanced list</h1>
    <h1 style="color: red;">
    <?php
        var_dump($albumInfo);
    ?>
    </h1>

    <?php if (isset($error)) : ?>
        <span class="error"><?= $error; ?></span>
    <?php endif; ?>

    <?php if (isset($albumInfo) && isset($totalAlbums)) : ?>
        
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Naam</th>
                    <th>Jaar</th>
                    <th>Nummers</th>
                    <th>Genre</th>
                    <th>Artiest</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="3">Totaal: <?= $totalAlbums; ?></td>
                </tr>
            </tfoot>
            <tbody>

                <?php foreach ($albumInfo as $Album) : ?>
                    <tr>
                        <td><?= $Album->id; ?></td>
                        <td><?= $Album->name; ?></td>
                        <td><?= $Album->year; ?></td>
                        <td><?= $Album->tracks; ?></td>
                        <td><?= $Album->genre; ?></td>
                        <td><?= $Album->artist; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>

</html>