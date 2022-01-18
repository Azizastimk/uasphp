<?php include 'header.php' ?>
        
        <!-- content -->
        <div class="content">

            <div class="container">

                <div class="box">

                    <div class="box-header">
                        Pengguna
                    </div>

                    <div class="box-body">
                        
                        <a href="tambah-pengguna.php" class="text-green"><i class="fas fa-plus-square"></i> Tambah</a>

                        <form action="">
                            <div class="input-group">
                                <input type="text" name="key" placeholder="Pencarian">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>   
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;

                                    $where    = " WHERE 1=1 ";
                                    if(isset($_GET['key'])){
                                        $where .= " AND nama LIKE '%".addslashes($_GET['key'])."%' ";
                                    }

                                    $pengguna = mysqli_query($conn, "SELECT * FROM pengguna $where ORDER BY id DESC");
                                    if(mysqli_num_rows($pengguna) > 0){
                                        while($p = mysqli_fetch_array($pengguna)){
                                ?>    
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p['nama'] ?></td>
                                    <td><?= $p['username'] ?></td>
                                    <td><?= $p['level'] ?></td>
                                    <td>
                                        <a href="edit-pengguna.php?id=<?= $p['id'] ?>" title="Edit Data" class="text-orange"><i class="far fa-edit"></i></a>
                                        <a href="hapus.php?idpengguna=<?= $p['id'] ?>" onclick="return confirm('Yakin ingin dihapus ?')" title="Hapus Data" class="text-red"><i class="far fa-trash-alt"></i></a>
                                     </td>
                                </tr>

                            <?php }}else{ ?>
                                <tr>
                                    <td colspan="5"> Data Tidak Ditemukan</td>    
                                </tr>
                            <?php } ?>
                            </tbody>        
                        </tablet>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>

<?php include 'footer.php' ?> 