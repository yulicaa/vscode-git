<?php
//membuat koneksi
$conn=mysqli_connect("localhost", "root", "", "phpdatabase");

//ambil data dari tabel mahasiswa/query data mahasiswa
$result=mysqli_query($conn, "SELECT*FROM mahasiswa");

// function query akan menerima isi parameter dari string query yg ada pada index2.php (line 3)
function query($query_kedua){
    //dikarenakan $conn diiluar function query maka dibutuhkan scope global $conn
    global $conn;
    $result = mysqli_query($conn, $query_kedua);
    //wadah kosong untuk menampung isi array pada saat looping line 16
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
return $rows;
}

function tambah ($data)
{
    global $conn;

    $nama = $_POST["Nama"];
        $nim = $_POST["Nim"];
        $email = $_POST["Email"];
        $jurusan = $_POST["Jurusan"];
        $gambar = $_POST["Gambar"];

        $query = " INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nim','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);

        return mysqli_query_rows($conn);
}

function hapus ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id");
    return mysqli_affected_rows($conn);
}

?>