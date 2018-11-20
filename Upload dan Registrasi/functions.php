<?php
//membuat koneksi
$conn=mysqli_connect("localhost", "root", "", "phpdatabase");

// cek koneksi jika error
// menggunakan method get untuk mengambil id yang telah terseleksi oleh user dan dimasukkan
// ke dalam variabel baru yaitu $id
// $id=$_GET["id"]=1;
// var_dump("$id");

// query berdasarkan id
// $mhs = query("SELECT * FROM mahasiswa WHERE id=$id");
// var_dump($mhs);

if (!$conn) {
    die('Koneksi Error : '.mysql_connect_errno()
    .' - '.mysqli_connect_error());
}

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

    $nama = htmlspecialchars($data["Nama"]);
    $nim = htmlspecialchars($data["Nim"]);
    $email = htmlspecialchars($data["Email"]);
    $jurusan = htmlspecialchars($data["Jurusan"]);
    // $gambar = htmlspecialchars($data["Gambar"]);

    $gambar=upload();
    if(!$gambar)
    {
        return false;
    }
        $query = " INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nim','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
}

function upload()
{
    $nama_file  =$_FILES['Gambar']['name'];
    $ukuran_file=$_FILES['Gambar']['size'];
    $error      =$_FILES['Gambar']['error'];
    $tmpfile    =$_FILES['Gambar']['tmp_name'];

    if($error===4)
    {
        // pastikan pada inputan gambar tidak terdapat atribut required
        echo "
            <script>
                alert('Tidak ada gambar yang diupload');
            </script>
        ";
        return false;
    }

    $jenis_gambar= ['jpg', 'jpeg', 'gif'];
    $pecah_gambar= explode('.', $nama_file);
    $pecah_gambar= strtolower(end($pecah_gambar));

    if(!in_array($pecah_gambar, $jenis_gambar))
    {
        echo "
        <script>
            alert('yang anda upload bukan file gambar');
        </script>
        ";
        return false;
    }

    // cek kapasitas gambar dalam byte kalau 1000000 byte = 1 Megabyte
    if($ukuran_file > 1000000)
    {
        echo"
        <script>
            alert('ukuran gambar terlalu besar');
        </script>
        ";
        return false;
    }

    move_uploaded_file($tmpfile, 'image/'.$nama_file);

    // kita return nama file nya agar dapat masuk ke$gambar = $upload() pada function tambah
    return $nama_file;

    // generate id untuk penamaan gambar dengan function uniqid()
    $namafilebaru=uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $pecah_gambar;
    // var_dump ($namafilebaru); die();

    move_uploaded_file($tmpfile, 'image/'.$namafilebaru);
    // kita return nama filenya agar dapat masuk ke $gambar=$upload() pada function tambah
    return $namafilebaru;
}

function hapus ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["Nama"]);
    $nim = htmlspecialchars($data["Nim"]);
    $email = htmlspecialchars($data["Email"]);
    $jurusan = htmlspecialchars($data["Jurusan"]);
    // $gambar = htmlspecialchars($data["Gambar"]);
    $GambarLama = htmlspecialchars($data["Gambar Lama"]);

    // cek apakah user menekan button browse
    if($_FILES['Gambar'][error]===4)
    {
        $gambar = $GambarLama;
    }else{
        $gambar = upload();
    }

    $query= " UPDATE mahasiswa SET
                Nama = '$nama',
                Nim = '$nim',
                Email = '$email',
                Jurusan = '$jurusan',
                Gambar = '$gambar'
                WHERE id = $id ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $sql= "SELECT * FROM mahasiswa WHERE
            Nama LIKE '%$keyword%' OR
            Nim LIKE '%$keyword%' OR
            Email LIKE '%$keyword%' OR
            Jurusan LIKE '%$keyword%'
        ";

    // kembalikan ke function query dengan parameter $sql
    return query($sql);

    // cat: pastikan $keyword pada line 77 terdapat petik satu karena nilainya berupa string
}

function registrasi($data)
{
    global $conn;

    // stripcslashes digunakan untuk menghilangkan blackslashes
    $username = strtolower(stripcslashes($data['username']));

    // mysqli_real_escape_string untuk memberikan perlindungan terhadap karakter-karakter unik (sql_injection)
    // pada mysqli_real_escape_string terdapat 2 parameter
    $password=mysqli_real_escape_string($conn,$data['password']);
    $password2=mysqli_real_escape_string($conn,$data['password2']);

    // cek username sudah ada apa belum
    $result=mysqli_query($conn,"SELECT username FROM users WHERE username='$username'");

    // cek kondisi jika line 174 bernilai true maka cetak echo
    if(mysqli_fetch_assoc($result))
    {
        echo "
        <script>
            alert('username sudah ada');
        </script>
        ";

        // agar proses insertnya gagal
        return false;
    }

    // cek konfirmasi password
    if($password!==$password2)
    {
        echo "
        <script>
            alert('password tidak sama');
        </script>
        ";

        return false;
    }

    // enkripsi password
        $password=password_hash($password, PASSWORD_DEFAULT);
        // $password=md5($password);
        var_dump($password);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

?>