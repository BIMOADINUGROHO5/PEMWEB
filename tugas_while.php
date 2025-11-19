<table>
    <thead>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $angka = 1; // Inisialisasi counter

        while ($angka <= 10) {
            $hasil = 3 * $angka;
            echo "<tr>";
            echo "<td>3 x " . $angka . "</td>";
            echo "<td>" . $hasil . "</td>";
            echo "</tr>";

            $angka++;
        }
        ?>
    </tbody>
    </table>

