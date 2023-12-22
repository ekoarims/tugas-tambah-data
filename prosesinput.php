<?php
//koneksi ke mysql
$conn = mysqli_connect ("localhost","root","","dtbarang");
if (mysqli_connect_errno()){
echo "Koneksi Gagal".mysqli_connect_error();
}
else{
    $kdbarang = $_POST['kode'];
    $nmbarang= $_POST['barang'];
    $vsatuan=$_POST['satuan'];
    $vkategori=$_POST['kategori'];
    $hrgmodal=$_POST['modal'];
    $hrgjual=$_POST['jual'];
    $query= mysqli_query($conn,"insert into dtjual (kd_barang,nmbarang,satuan,kategori,hrgmodal,hrgjual) 
    values ('$kdbarang','$nmbarang','$vsatuan','$vkategori','$hrgmodal','$hrgjual')");
    if ($query)
    echo "Input Data Sukses<br>";
    else
    echo "Input Data Gagal<br>";
    }
    ?>