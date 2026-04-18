<?php
// Contoh penggunaan foreach pada array

// Membuat array berisi daftar nama
$nama = ["Andi", "Budi", "Citra", "Dewi"];

// Perulangan foreach untuk menampilkan isi array
foreach ($nama as $item) {
    // $item akan berisi setiap nilai dari array $nama
    echo "Nama: " . $item . "<br>";
}

echo "<br>";

// Contoh foreach dengan key (index) dan value
foreach ($nama as $index => $item) {
    // $index = posisi array (0,1,2,...)
    // $item  = nilai dari array
    echo "Index ke-$index berisi: $item <br>";
}
?>