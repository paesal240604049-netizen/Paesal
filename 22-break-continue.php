<?php
// Contoh penggunaan break dan continue

echo "<b>Contoh break:</b><br>";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break; // menghentikan loop saat i = 6
    }
    echo "Angka: $i <br>";
}

echo "<br><b>Contoh continue:</b><br>";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        continue; // melewati angka 6
    }
    echo "Angka: $i <br>";
}
?>