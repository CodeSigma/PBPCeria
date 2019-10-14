<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style/main.css">
<title>Edit Produk</title>
</head>
<body>


<div class="row">
        <div class="col-xl-2 col-md-2 col-sm-3 wrapper">   
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Sidebar Admin</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Dummy Heading</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="profil-edit.php">Edit Profil</a>
                            </li>
                            <li>
                                <a href="produk-edit.php">Edit Produk</a>
                            </li>
                            <li>
                                <a href="kategori-edit.php">Edit Kategori</a>
                            </li>
                            <li>
                                <a href="subkategori-edit.php">Edit Subkategori</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-xl-10 col-md-10 col-sm-10 mainpage">
            <div class="tabel produk">
                <table class="table table-light" style="text-align:center;">
                    <thead >
                        <th>Kategori</th>
                        <th>Subkategori</th>
                        <th>Nama</th>
                        <th>Warna</th>
                        <th>Harga</th>
                    </thead>
                    <tbody>
                        <?php
                            require_once('database/db_login.php');
                            
                            $query = 'SELECT k.nama as knama, sb.nama as sbnama, p.nama, p.warna, p.harga
                                        FROM produk p, kategori k, subkategori sb
                                        WHERE p.id_kategori = k.id_kat AND p.idsub_kategori = sb.id_subkat
                                        ORDER BY knama, sbnama;';
                                        
                            //$query2 = 'SELECT DISTINCT  FROM subkategori'            
                            $result = mysqli_query($db,$query);

                            while($row = mysqli_fetch_array($result)){
                                echo '<tr>';
                                echo '<td>'.$row['knama'].'</td>';
                                echo '<td>'.$row['sbnama'].'</td>';
                                echo '<td>'.$row['nama'].'</td>';
                                echo '<td>'.$row['warna'].'</td>';
                                echo '<td>'.$row['harga'].'</td>';
                                echo '</tr>';
                            }
                            
                        ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>      

        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>