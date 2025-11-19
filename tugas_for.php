<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas For PHP</title>
</head>
<body>
    <h2>Contoh Tabel dengan Perulangan For</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>Ini adalah baris ke-$i</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
