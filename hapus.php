<?php

    include '../koneksi.php';

    if(isset($_GET['idpengguna'])){

        $delete = mysqli_query($conn, "DELETE FROM pengguna WHERE id = '".$_GET['idpengguna']."' ");
        echo "<script>window.location = 'pengguna.php'</script>";

    }

?>    