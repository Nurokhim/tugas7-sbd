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
    <h1 style>DATA USER</h1>
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id</td>
                <td>username</td>  
                <td>password</td>
                <td>nama lengkap</td>                      
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($con, 'SELECT * FROM user');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['nama_lengkap'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>