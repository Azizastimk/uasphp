<?php include 'header.php' ?>
        
        <!-- content -->
        <div class="content">

            <div class="container">

                <div class="box">

                    <div class="box-header">
                        Tambah Pengguna
                    </div>

                    <div class="box-body">
                        
                        <form action="" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="Nama" placeholder="Nama Lengkap" class="input-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="Username" placeholder="Username" class="input-control" required>
                            </div>  

                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="input-control" required>
                                    <option value="">Pilih</option>
                                    <option value="super admin">Super Admin</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div> 

                            <button type="button" class="btn" onclick="window.location = 'pengguna.php'">Kembali</button>
                            <input type="submit" name="submit" values="Simpan" class="btn btn-blue">
                        
                        </form>

                        <?php

                            if(isset($_POST['submit'])){

                                $nama       = addslashes(ucwords($_POST['Nama']));
                                $user       = ($_POST['Username']);
                                $level      = ($_POST['level']);
                                $pass       = '123456';

                                $simpan = mysqli_query($conn, "INSERT INTO pengguna VALUES(
                                    null,
                                    '".$nama."',
                                    '".$user."',
                                    '".MD5($pass)."',
                                    '".$level."',
                                    null,
                                    null
                            )");

                                if($simpan){
                                    echo '<div class="alert alert-sukses">data berhasil</div>';
                                }else{
                                    echo 'gagal simpan'.mysqli_error($conn);
                                }
                            }
                        ?>

                    </div>
                
                </div>
            
            </div>
        
        </div>

<?php include 'footer.php' ?> 