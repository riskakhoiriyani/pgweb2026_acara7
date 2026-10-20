
<?php
$data = [
    ["Kebonsari", 47.5, 58524],
    ["Geger", 36.6, 65698],
    ["Dolopo", 48.9, 58958],
    ["Dagangan", 72.4, 50796],
    ["Wungu", 45.5, 62384]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Penduduk Kabupaten Madiun</title>
</head>
<body>
    <h2>Data Penduduk Kabupaten Madiun</h2>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>kecamatan</th>
            <th>luas</th>
            <th>jumlah_penduduk</th>
        </tr>

        <?php foreach ($data as $baris) { ?>
        <tr>
            <td><?= $baris[0] ?></td>
            <td><?= $baris[1] ?></td>
            <td><?= $baris[2] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
