<?php
    session_start();
    include '../koneksi.php';
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Panel Admin - Sekolahcoding</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <body class="bg-light">

        <!-- navbar -->
        <div class="navbar">

            <div class="container">

                <!-- navbar brand -->
                <h2 class="nav-brand float-left">Sekolahcoding</h2>

                <!-- navbar menu -->
                <ul class="nav-menu float-left">
                    <li><a href="index.php">Dashboard</a></li>

                    <?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>

                        <li><a href="pengguna.php">Pengguna</a></li>
                    <?php }elseif($_SESSION['ulevel'] == 'Admin'){ ?>
                    
                        <li><a href="informasi.php">Informasi</a></li>
                        <li>
                            <a href="">Pengaturan <i class="fa fa-caret-down"></i></a>
                    
                            <!-- sub menu -->
                            <ul class="dropdown">
                                <li><a href="profil-sekolah.php">Tentang Sekolahcoding</a></li>
                            </ul>
                        </li>
                   
                   <?php } ?>

                    <li>
                        <a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i></a>

                        <!-- sub menu -->
                        <ul class="dropdown">
                            <li><a href="ubah-password.php">Ubah Password</a></li>
                            <li><a href="logout.php">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>