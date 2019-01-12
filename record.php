<?php
require_once "connect.php";

$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if($result){
    if(mysqli_num_rows($result)){
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

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
    table{
    margin: 100px auto;
    margin-left: 10%;
    margin-right: 30%;
    width: 1000px;
    padding: 10px;

    }
    img{
      margin-left: 30%;
    }

    </style>

  </head>
  <body>
    <h1>Data Siswa</h1>
    <div id="sidebar">
      <img src="users.png" height="80" width="80" />
      <a href="../modul 6/add_data.php"> Kembali</a>
     <hr border="1">
      <a href="../modul 6/logout.php"> Logout</a>
     <hr border="1">
   </div>
  </body>
</html>
<table border=1 cellspacing=1 cellpadding=5>
    <tr>
        <td>NO</td>
        <td width=100>NIS</td>
        <td width=150>Nama</td>
        <td>Alamat</td>
    </tr>
    <?php
        $i = 1;
        while($row = mysqli_fetch_row($result)){
    ?>
    <tr>
        <td>
            <?php echo $i;?>
        </td>
        <td>
            <?php echo $row[0];?>
        </td>
        <td>
            <?php echo $row[1];?>
        </td>
        <td>
            <?php echo $row[2];?>
        </td>
    </tr>
    <?php
        $i++;
    }
    ?>
</table>
<?php
}
else{
    echo 'Data Tidak Ditemukan';
}
mysqli_close($connect);
}
?>
