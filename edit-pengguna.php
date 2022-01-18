<?php include 'header.php' ?>

<?php
    date_default_timezone_set("Asia/Jakarta");
    $pengguna = mysqli_query($conn, "SELECT * FROM pengguna WHERE id = '".$_GET['id']."' ");
    $p        = mysqli_fetch_object($pengguna);
?>    
        <!-- content -->
        <div class="content">

            <div class="container">

                <div class="box">

                    <div class="box-header">
                        Edit Pengguna
                    </div>

                    <div class="box-body">
                        
                        <form action="" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?= $p->nama ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="Username" placeholder="Username" class="input-control" value="<?= $p->username ?>" required>
                            </div>  

                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="input-control" required>
                                    <option value="">Pilih</option>
                                    <option value="super admin" <?= ($p->level == 'Super Admin')? 'selected':''; ?>>Super Admin</option>
                                    <option value="admin" <?= ($p->level == 'Admin')? 'selected':''; ?>>Admin</option>
                                </select>
                            </div> 

                            <button type="button" class="btn" onclick="window.location = 'pengguna.php'">Kembali</button>
                            <input type="submit" name="submit" values="Simpan" class="btn btn-blue">
                        
                        </form>

                        <?php

                            if(isset($_POST['submit'])){

                                $nama       = ($_POST['nama']);
                                $user       = ($_POST['Username']);
                                $level      = ($_POST['level']);
                                $currdate   = date('Y-m-d H:i:s');

                                $update     = mysqli_query($conn, "UPDATE pengguna SET
                                            nama        = '".$nama."',
                                            username    = '".$user."',
                                            level       = '".$level."',
                                            updated_at  = '".$currdate."'
                                            WHERE id = '".$_GET['id']."'
                                    ");

                                if($update){
                                    echo '<div class="alert alert-sukses">Edit Data Berhasil</div>';
                                }else{
                                    echo 'Gagal Edit'.mysqli_error($conn);
                                }
                            }
                        ?>

                    </div>
                
                </div>
            
            </div>
        
        </div>

<?php include 'footer.php' ?> 