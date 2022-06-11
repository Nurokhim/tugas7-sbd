<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 20%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 20%;
  border: 1px solid #ddd;
}

td {
  text-align: left;
  margin; auto;
  padding: 10px;
}
thead {
  text-align: left;
  background-color: teal;
  color: white;
  padding: 10px;
}


tr:nth-child(even) {
  background-color: #f2f2f2;
}
    </style>
</head>
<body>
    <h1 align="center">Sistem Informasi Klinik</h1>
<body>
<h2>Table Pasien</h2>
<table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id Pasien</td>
                <td>Nama Pasien</td>
                <td>Jenis Kelamin</td>
                <td>Umur</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM pasien');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['nama_pasien'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['umur'] ?></td>
            </tr>
        <?php } ?>
    </table>
    
    <body>
<h2>Table Dokter</h2>
<table 1>
        <thead>
            <tr>
				<td>id_dokter</td>
                <td>nama_dokter</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM dokter');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
				<td><?php echo $data['id_dokter'] ?></td>
                <td><?php echo $data['nama_dokter'] ?></td>
               
              
            </tr>
        <?php } ?>
    </table>


    <body>
<h2 style>Table Berobat</h2>
<table>
        <thead>
            <tr>
                <td>id_berobat</td>
				<td>id_Pasien</td>
                <td>id_dokter</td>
                <td>tgl_berobat</td>
                <td>keluhan_pasien</td>        
                <td>hasil_diagnosa</td>
                <td>penatalaksanaan</td>             
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM berobat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['id_berobat'] ?></td>
				<td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['id_dokter'] ?></td>
                <td><?php echo $data['tgl_berobat'] ?></td>
                <td><?php echo $data['keluhan_pasien'] ?></td>
                <td><?php echo $data['hasil_diagnosa'] ?></td>
                <td><?php echo $data['penatalaksanaan'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <body>
<h2 style>Table Obat</h2>
<table>
        <thead>
            <tr>
				<td>id_obat</td>
                <td>nama_obat</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
				<td><?php echo $data['id_obat'] ?></td>
                <td><?php echo $data['nama_obat'] ?></td>                            
            </tr>
        <?php } ?>
    </table>

    <body>
<h2 style>Table Resep Obat</h2>
<table>
        <thead>
            <tr>
				<td>id_resep</td>
                <td>id_berobat</td>
                <td>id_obat</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM resep_obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
				<td><?php echo $data['id_obat'] ?></td>
                <td><?php echo $data['id_berobat'] ?></td>
                <td><?php echo $data['id_resep'] ?></td>
           
            </tr>
        <?php } ?>
    </table>

    <h2 style>Table User</h2>
<table>
        <thead>
            <tr>
                <td>id</td>
				<td>username</td>
                <td>password</td>
                <td>nama_lengkap</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM user');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
				<td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['nama_lengkap'] ?></td>
            </tr>
        <?php } ?>
    </table>


</body>
</html>