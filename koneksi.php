<?php

// koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "tugas03");

// ambil data dari tabel mahasiswa /query data mahasiswa

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    // kita buat variabel kosong  unutk menampung data
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>