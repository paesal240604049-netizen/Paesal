<?php


// Membuat function hitungLuas dengan 2 parameter: panjang dan lebar
function hitungLuas($panjang, $lebar) {
    // Rumus luas persegi panjang = panjang × lebar
    $luas = $panjang * $lebar;
    
    // Mengembalikan nilai luas
    return $luas;
}

// Memanggil function dan menyimpan hasilnya
$hasil = hitungLuas(10, 5);

// Menampilkan hasil
echo "Luas persegi panjang adalah: " . $hasil;
?>