<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style/main.css">
<title>Admin</title>
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
            
        <div class="col-xl-10 col-md-10 col-sm-8 mainpage">
            <div class="col-xl-12 col-md-12 col-sm-12 search">
                <table name="searchByNama">
                    <td><h6> Cari barang</h6></td>
                    <td><input class="form-control" type="text" placeholder="Masukan nama barang" id="searchByNama-input"></td>
                    <td><button class="btn btn-primary" type="button">cari</button></td>
                </table>
                <br>
                <table name="searchByKategori">
                    <tr>
                        <td><h6>Kategori</h6></td>
                        <td><input class="form-control" type="text" placeholder="Masukan kategori" id="searchByKategori-input"></td>
                        <td><button class="btn btn-primary" type="button">cari</button></td>
                    </tr>
                    
                    <tr>
                        <td><h6>Subkategori</h6></td>
                        <td><input class="form-control" type="text" placeholder="Masukan subkategori" id="searcBySubKategori-input"></td>
                        <td><button class="btn btn-primary" type="button">cari</button></td>
                    </tr>
                
                </table>  
        
            </div>
            <div class="col-xl-12 col-md-12 col-sm-12 product" style="padding: 0px;">
                <?php
                    require_once('database/db_login.php');

                    $query = "SELECT * FROM produk";
                    $result = mysqli_query($db,$query);
                    if(!$result){
                        die ("Query gagal");
                    }
                    echo '<table class="table table-dark">';  
                        echo '<tr>';
                        while($row = mysqli_fetch_array($result)){
                                echo '<td>';
                                    echo '<ul>';
                                        echo '<li><img src='.'"'.$row['path'].'"'.' class="img-fluid"  alt=""></li>';
                                        // echo '<li>'.$row['id_produk'].'</li>';
                                        echo '<li>'.$row['nama'].'</li>';
                                        echo '<li>'.$row['warna'].'</li>';
                                        echo '<li>'.$row['harga'].'</li>';
                                    echo '</ul>';
                                echo '</td>';
                        }
                    echo '</table>';
                ?>
            </div>
        </div>
        


    </div>  
    
       
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    
</html>