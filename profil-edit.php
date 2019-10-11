<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Edit Profil</title>
</head>
<body>
    <div class="row">
            <div class="col-xl-2 col-sm-4 wrapper">   
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
                
            <div class="col-xl-10 col-sm-8">
                <form method="POST" action="">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input class="form-control" type="text" placeholder="nama (maks 50 karakter)"  pattern="^[A-Za-z][A-Za-z0-9 .,:-_]{3,50}$" id="searchByNama-input"></td>
                        </tr>
                        <tr>
                            <td>Password Lama</td>
                            <td>:</td>
                            <td><input class="form-control" type="password" placeholder="password (minimal 6 karakter)"  pattern="^[A-Za-z0-9 .,:-_]{6,50}$" id="searchByNama-input"></td>
                        </tr>
                        <tr>
                            <td>Password Baru</td>
                            <td>:</td>
                            <td><input class="form-control" type="password" placeholder="password (minimal 6 karakter)"  pattern="^[A-Za-z0-9 .,:-_]{6,50}$" id="searchByNama-input"></td>
                        </tr>
                        <tr>
                            
                            <td><a name="submit" id="" class="btn btn-primary" href="#" role="button">Submit</a></td>
                        </tr>
                    </table>
                </form>

            </div>    
        </div> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>