<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <style media="screen">
    body {
     margin: 0;
     padding: 0;
     background: url(asu.jpg);
     background-size: cover;
     font-family: sans-serif;
   }


    th {
 background-color: #4CAF50;
 color: white;
 padding: 10px 40px;
 text-align: left;
}

tr:hover {background-color: #4CAF50;}
td {
   padding: 15px 70px;
   text-align: left;
   background-color: rgb(0,0,0,0.8);
   color: white;
}
body{
margin: 10px 250px;

}
#sidebar{
 height: 100%;
 width: 220px;
 position: fixed;
 z-index: 1;
 top : 0;
 left: 0;
 background-color: rgb(0, 0, 0, 0.10);
 padding-top: 20px;
}
#sidebar a{
 text-decoration: none;
 margin: 0px;
 background-color: rgb(0,0,0,0.20);
 padding: 10px 35px;
 display:grid;
 color: grey;
}
#sidebar h1 {
 margin: auto;
 text-align: center;
}
.search{
 margin-right:  40px;
}

table {
 margin-top: 30px;
}
.link{
 margin-left: 750px;
}
.link a{
 text-decoration: none;
 color: black;
}
input[type=submit] {
    margin 5px auto;
    float: right;
    padding: 5px;
    width: 90px;
    border: 1px solid #fff;
    color: #fff;
    background: blue;
    cursor: pointer;
    text-align: center;
  }
  form{
    margin: 160px auto;
    margin-left: 30%;
    width: 520px;
    padding: 10px;

  }
  
  img{
    margin-left: 30%;
  }

    </style>
</head>
<body>
  <h1>Tambah Data Siswa</h1>

  <div id="sidebar">
    <img src="house.png" height="80" width="80" />
    <a href="../modul 6/record.php"> <b>Lihat Data</b></a>
    <hr border="1">
    <a href="../modul 6/logout.php"> <b>Logout</b></a>
   <hr border="1">
  </div>

    <div class="loginbox">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" /class="form-input"required></td>

        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" /class="form-input"required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" class="form-input"required/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" /class="form-input"required></td>
        </tr>
        <tr>

            <td colspan="2"><input type="submit" value="Simpan" /></td>
        </tr>
    </table>
    </form>


</body>
</html>

<?php
    require_once "connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        //tambakan data baru ke tabel
        $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "','" .$nama. "', '" .$alamat. "','" .$password. "')";
        $result = mysqli_query($connect, $sql);
        if($result){
            echo 'Berhasil Menambahkan Data<br>';
        }
        else {
            echo 'Gagal Menambahkan Data <br>';
            echo mysqli_error($connect);
        }
    }

?>
