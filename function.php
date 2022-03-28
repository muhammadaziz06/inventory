<?<?php 
session_start();

//membuat koneksi ke database

$conn = mysqli_connect("localhost","root","","inventory");

if ($conn) {
	echo 'berhasil';
}


 //menambah barang baru
 if(isset($_POST['addnewbarang'])){
 	$namabarang = $_POST['namabarang'];
 	$deskripsi = $_POST['deskripsi'];
 	$stock = $_POST['stock'];

 	$addtotable = mysqli_query($conn,"insert into barang (namabarang, deskripsi, stock) values('$namabarang','$deskripsi','$stock')");
 	if ($addtotable) {
 			header('location:barang.php');
 		} else {
 			echo 'Gagal';
 			header('location:barang.php'); 		
 		}	
 }

 //menambah bahan baku
  if(isset($_POST['addnewbahanbaku'])){
    $namabahanbaku = $_POST['namabahanbaku'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn,"insert into bahanbaku (namabahanbaku, deskripsi, stock) values('$namabahanbaku','$deskripsi','$stock')");
    if ($addtotable) {
            header('location:bahanbaku.php');
        } else {
            echo 'Gagal';
            header('location:bahanbaku.php');      
        }   
 };

 //menambah bahan baku masuk
 if(isset($_POST['addnewbahanbakumasuk'])){
    $namabahanbaku = $_POST['namabahanbaku'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn,"insert into bahanbaku (namabahanbaku, deskripsi, stock) values('$namabahanbaku','$deskripsi','$stock')");
    if ($addtotable) {
            header('location:bahanbaku.php');
        } else {
            echo 'Gagal';
            header('location:bahanbaku.php');      
        }   
 };

 //menambah barang masuk
 if (isset($_POST['barangmasuk'])) {
     $barangnya = $_POST['barangnya'];
     $penerima = $_POST['penerima'];
     $jumlah = $_POST['jumlah'];

     $cekstocksekarang = mysqli_query($conn,"select * from barang where idbarang='$barangnya'");
     $ambildatanya = mysqli_fetch_array($cekstocksekarang);

     $stocksekarang = $ambildatanya['stock'];
     $tambahkanstocksekarangdenganjumlah = $stocksekarang+$jumlah;

     $addtobarangmasuk = mysqli_query($conn,"insert into barangmasuk (idbarang, keterangan, jumlah) values('$barangnya','$penerima','$jumlah')");
     $updatestockmasuk = mysqli_query($conn,"update barang set stock='$tambahkanstocksekarangdenganjumlah'where idbarang='$barangnya'");
     if ($addtobarangmasuk&&$updatestockmasuk) {
            header('location:barangmasuk.php');
        } else {
            echo 'Gagal';
            header('location:barangmasuk.php');      
        }   
 }

 //menambah barang keluar
 if (isset($_POST['barangkeluar'])) {
     $barangnya = $_POST['barangnya'];
     $penerima = $_POST['penerima'];
     $jumlah = $_POST['jumlah'];

     $cekstocksekarang = mysqli_query($conn,"select * from barang where idbarang='$barangnya'");
     $ambildatanya = mysqli_fetch_array($cekstocksekarang);

     $stocksekarang = $ambildatanya['stock'];
     if($stocksekarang >= $jumlah){
        //kalo barangnya cukup
     $tambahkanstocksekarangdenganjumlah = $stocksekarang-$jumlah;

     $addtobarangmasuk = mysqli_query($conn,"insert into barangkeluar (idbarang, penerima, jumlah) values('$barangnya','$penerima','$jumlah')");
     $updatestockmasuk = mysqli_query($conn,"update barang set stock='$tambahkanstocksekarangdenganjumlah'where idbarang='$barangnya'");
     if ($addtobarangmasuk&&$updatestockmasuk) {
            header('location:barangkeluar.php');
        } else {
            echo 'Gagal';
            header('location:barangkeluar.php');      
        } 
    } else {
        //kalo barangnya tidak cukup
        echo '#';
    }  
 }


//menambah bahan baku masuk
if (isset($_POST['bahanbakumasuk'])) {
     $bahanbakunya = $_POST['bahanbakunya'];
     $supplier = $_POST['supplier'];
     $jumlah = $_POST['jumlah'];
     $satuan = $_POST['satuan'];

     $cekstocksekarang = mysqli_query($conn,"select * from bahanbaku where idbahanbaku='$bahanbakunya'");
     $ambildatanya = mysqli_fetch_array($cekstocksekarang);

     $stocksekarang = $ambildatanya['stock'];
     $tambahkanstocksekarangdenganjumlah = $stocksekarang+$jumlah;

     $addtobarangmasuk = mysqli_query($conn,"insert into bahanbakumasuk (idbahanbaku, supplier, jumlah, satuan) values('$bahanbakunya','$supplier','$jumlah','$satuan')");
     $updatestockmasuk = mysqli_query($conn,"update bahanbaku set stock='$tambahkanstocksekarangdenganjumlah'where idbahanbaku='$bahanbakunya'");
     if ($addtobarangmasuk&&$updatestockmasuk) {
            header('location:bahanbakumasuk.php');
        } else {
            echo 'Gagal';
            header('location:bahanbakumasuk.php');      
        }   
 }

 //menambah bahan baku keluar
 if (isset($_POST['bahanbakukeluar'])) {
     $bahanbakunya = $_POST['bahanbakunya'];
     $penerima = $_POST['penerima'];
     $jumlah = $_POST['jumlah'];
     $satuan = $_POST['satuan'];

     $cekstocksekarang = mysqli_query($conn,"select * from bahanbaku where idbahanbaku='$bahanbakunya'");
     $ambildatanya = mysqli_fetch_array($cekstocksekarang);

     $stocksekarang = $ambildatanya['stock'];

     if($stocksekarang >= $jumlah) {
        //kalau barangnya cukup
        $tambahkanstocksekarangdenganjumlah = $stocksekarang-$jumlah;

     $addtobarangmasuk = mysqli_query($conn,"insert into bahanbakukeluar (idbahanbaku, penerima, jumlah, satuan) values('$bahanbakunya','$penerima','$jumlah','$satuan')");
     $updatestockmasuk = mysqli_query($conn,"update bahanbaku set stock='$tambahkanstocksekarangdenganjumlah'where idbahanbaku='$bahanbakunya'");
     if ($addtobarangmasuk&&$updatestockmasuk) {
            header('location:bahanbakukeluar.php');
        } else {
            echo 'Gagal';
            header('location:bahanbakukeluar.php');      
        }   
    }
    else {
    //kalau barangnya gak cukup
    echo '#';
}
}


//update info barang
 if (isset($_POST['updatebarang'])) {
     $idb = $_POST['idb'];
     $namabarang = $_POST['namabarang'];
     $deskripsi = $_POST['deskripsi'];

     $update = mysqli_query($conn,"update barang set namabarang='$namabarang', deskripsi='$deskripsi' where idbarang='$idb'");
     if ($update) {
            header('location:barang.php');
        } else {
            echo 'Gagal';
            header('location:barang.php');      
        }   
 }

 //menghapus barang dari stock
  if (isset($_POST['hapusbarang'])) {
     $idb = $_POST['idb'];
     
     $hapus = mysqli_query($conn,"delete from barang where idbarang='$idb'");
     if ($hapus) {
            header('location:barang.php');
        } else {
            echo 'Gagal';
            header('location:barang.php');      
        }   
 }

 //update info bahan baku
 if (isset($_POST['updatebahanbaku'])) {
     $idb = $_POST['idb'];
     $namabahanbaku = $_POST['namabahanbaku'];
     $deskripsi = $_POST['deskripsi'];

     $update = mysqli_query($conn,"update bahanbaku set namabahanbaku='$namabahanbaku', deskripsi='$deskripsi' where idbahanbaku='$idb'");
     if ($update) {
            header('location:bahanbaku.php');
        } else {
            echo 'Gagal';
            header('location:bahanbaku.php');      
        }   
 }

 //menghapus bahan baku dari stock
  if (isset($_POST['hapusbahanbaku'])) {
     $idb = $_POST['idb'];
     
     $hapus = mysqli_query($conn,"delete from bahanbaku where idbahanbaku='$idb'");
     if ($hapus) {
            header('location:bahanbaku.php');
        } else {
            echo 'Gagal';
            header('location:bahanbaku.php');      
        }   
 }

 //mengubah data barang masuk
 if (isset($_POST['updatebarangmasuk'])) {
     $idb = $_POST['idb'];
     $idm = $_POST['idm'];
     $deskripsi = $_POST['keterangan'];
     $jumlah = $_POST['jumlah'];

     $lihatstock = mysqli_query($conn,"select * from barang where idbarang='$idb'");
     $stocknya = mysqli_fetch_array($lihatstock);
     $stockskrng = $stocknya['stock'];

     $jumlahskrng = mysqli_query($conn,"select * from barangmasuk where idmasuk='$idm'");
     $jumlahnya = mysqli_fetch_array($jumlahskrng);
     $jumlahskrng = $jumlahnya['jumlah'];

     if($jumlah>$jumlahskrng){
        $selisih = $jumlah-$jumlahskrng;
        $kurangin = $stockskrng + $selisih;
        $kurangistocknya = mysqli_query($conn,"update barang set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn,"update barangmasuk set jumlah='$jumlah', keterangan='$deskripsi' where idmasuk='$idm'");
        if($kurangistocknya&&$updatenya){
          header('location:barangmasuk.php');
        } else {
            echo 'Gagal';
            header('location:barangmasuk.php');      
        }
     }
     else {
        $selisih = $jumlahskrng-$jumlah;
        $kurangin = $stockskrng - $selisih;
        $kurangistocknya = mysqli_query($conn,"update barang set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn,"update barangmasuk set jumlah='$jumlah', keterangan='$deskripsi' where idmasuk='$idm'");
        if($kurangistocknya&&$updatenya){
          header('location:barangmasuk.php');
        } else {
            echo 'Gagal';
            header('location:barangmasuk.php');      
        }
     }

 }
 //menghapus barang masuk
 if (isset($_POST['hapusbarangmasuk'])) {
     $idb = $_POST['idb'];
     $idm = $_POST['idm'];
     $jumlah = $_POST['jumlah'];
     
     $getdatastock = mysqli_query($conn,"select * from barang where idbarang='$idb'");
     $data = mysqli_fetch_array($getdatastock);
     $stok = $data['stock'];

     $selisih = $stok-$jumlah;

     $update = mysqli_query($conn,"update barang set stock='$selisih' where idbarang='$idb'");
     $hapusdata = mysqli_query($conn,"delete from barangmasuk where idmasuk='$idm'");

     if($update&&$hapusdata){
          header('location:barangmasuk.php');
        } else {
            echo 'Gagal';
            header('location:barangmasuk.php');      
        }
    }

 //mengubah data barang keluar
 if (isset($_POST['updatebarangkeluar'])) {
     $idb = $_POST['idb'];
     $idk = $_POST['idk'];
     $penerima = $_POST['penerima'];
     $jumlah = $_POST['jumlah'];

     $lihatstock = mysqli_query($conn,"select * from barang where idbarang='$idb'");
     $stocknya = mysqli_fetch_array($lihatstock);
     $stockskrng = $stocknya['stock'];

     $jumlahskrng = mysqli_query($conn,"select * from barangkeluar where idkeluar='$idk'");
     $jumlahnya = mysqli_fetch_array($jumlahskrng);
     $jumlahskrng = $jumlahnya['jumlah'];

     if($jumlah>$jumlahskrng){
        $selisih = $jumlah-$jumlahskrng;
        $kurangin = $stockskrng - $selisih;
        $kurangistocknya = mysqli_query($conn,"update barang set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn,"update barangkeluar set jumlah='$jumlah', penerima='$penerima' where idkeluar='$idk'");
        if($kurangistocknya&&$updatenya){
          header('location:barangkeluar.php');
        } else {
            echo 'Gagal';
            header('location:barangkeluar.php');      
        }
     }
     else {
        $selisih = $jumlahskrng-$jumlah;
        $kurangin = $stockskrng + $selisih;
        $kurangistocknya = mysqli_query($conn,"update barang set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn,"update barangkeluar set jumlah='$jumlah', penerima='$penerima' where idkeluar='$idk'");
        if($kurangistocknya&&$updatenya){
          header('location:barangkeluar.php');
        } else {
            echo 'Gagal';
            header('location:barangkeluar.php');      
        }
     }

 }
 //menghapus barang keluar
 if (isset($_POST['hapusbarangkeluar'])) {
     $idb = $_POST['idb'];
     $idk = $_POST['idk'];
     $jumlah = $_POST['jumlah'];
     
     $getdatastock = mysqli_query($conn,"select * from barang where idbarang='$idb'");
     $data = mysqli_fetch_array($getdatastock);
     $stok = $data['stock'];

     $selisih = $stok+$jumlah;

     $update = mysqli_query($conn,"update barang set stock='$selisih' where idbarang='$idb'");
     $hapusdata = mysqli_query($conn,"delete from barangkeluar where idkeluar='$idk'");

     if($update&&$hapusdata){
          header('location:barangkeluar.php');
        } else {
            echo 'Gagal';
            header('location:barangkeluar.php');      
        }
    }

//mengubah data bahan baku masuk
 if (isset($_POST['updatebahanbakumasuk'])) {
     $idb = $_POST['idb'];
     $idm = $_POST['idm'];
     $supplier = $_POST['supplier'];
     $jumlah = $_POST['jumlah'];
     $satuan = $_POST['satuan'];

     $lihatstock = mysqli_query($conn,"select * from bahanbaku where idbahanbaku='$idb'");
     $stocknya = mysqli_fetch_array($lihatstock);
     $stockskrng = $stocknya['stock'];

     $jumlahskrng = mysqli_query($conn,"select * from bahanbakumasuk where idbahanbakumasuk='$idm'");
     $jumlahnya = mysqli_fetch_array($jumlahskrng);
     $jumlahskrng = $jumlahnya['jumlah'];

     if($jumlah>$jumlahskrng){
        $selisih = $jumlah-$jumlahskrng;
        $kurangin = $stockskrng + $selisih;
        $kurangistocknya = mysqli_query($conn,"update bahanbaku set stock='$kurangin' where idbahanbaku='$idb'");
        $updatenya = mysqli_query($conn,"update bahanbakumasuk set jumlah='$jumlah', supplier='$supplier' where idbahanbakumasuk='$idm'");
        if($kurangistocknya&&$updatenya){
          header('location:bahanbakumasuk.php');
        } else {
            echo 'Gagal';
            header('location:bahanbakumasuk.php');      
        }
     }
     else {
        $selisih = $jumlahskrng-$jumlah;
        $kurangin = $stockskrng - $selisih;
        $kurangistocknya = mysqli_query($conn,"update bahanbaku set stock='$kurangin' where idbahanbaku='$idb'");
        $updatenya = mysqli_query($conn,"update bahanbakumasuk set jumlah='$jumlah', supplier='$supplier' where idbahanbakumasuk='$idm'");
        if($kurangistocknya&&$updatenya){
          header('location:bahanbakumasuk.php');
        } else {
            echo 'Gagal';
            header('location:bahanbakumasuk.php');      
        }
     }

 }
 //menghapus bahan baku masuk
 if (isset($_POST['hapusbahanbakumasuk'])) {
     $idb = $_POST['idb'];
     $idm = $_POST['idm'];
     $jumlah = $_POST['jumlah'];
     
     $getdatastock = mysqli_query($conn,"select * from bahanbaku where idbahanbaku='$idb'");
     $data = mysqli_fetch_array($getdatastock);
     $stok = $data['stock'];

     $selisih = $stok-$jumlah;

     $update = mysqli_query($conn,"update bahanbaku set stock='$selisih' where idbahanbaku='$idb'");
     $hapusdata = mysqli_query($conn,"delete from bahanbakumasuk where idbahanbakumasuk='$idm'");

     if($update&&$hapusdata){
          header('location:bahanbakumasuk.php');
        } else {
            echo 'Gagal';
            header('location:bahanbakumasuk.php');      
        }
    }

 //mengubah data bahan baku keluar
 if (isset($_POST['updatebahanbakukeluar'])) {
     $idb = $_POST['idb'];
     $idk = $_POST['idk'];
     $penerima = $_POST['penerima'];
     $jumlah = $_POST['jumlah'];
     $satuan = $_POST['satuan'];

     $lihatstock = mysqli_query($conn,"select * from bahanbaku where idbahanbaku='$idb'");
     $stocknya = mysqli_fetch_array($lihatstock);
     $stockskrng = $stocknya['stock'];

     $jumlahskrng = mysqli_query($conn,"select * from bahanbakukeluar where idbahanbakukeluar='$idk'");
     $jumlahnya = mysqli_fetch_array($jumlahskrng);
     $jumlahskrng = $jumlahnya['jumlah'];

     if($jumlah>$jumlahskrng){
        $selisih = $jumlah-$jumlahskrng;
        $kurangin = $stockskrng - $selisih;
        $kurangistocknya = mysqli_query($conn,"update bahanbaku set stock='$kurangin' where idbahanbaku='$idb'");
        $updatenya = mysqli_query($conn,"update bahanbakukeluar set jumlah='$jumlah', penerima='$penerima' where idbahanbakukeluar='$idk'");
        if($kurangistocknya&&$updatenya){
          header('location:bahanbakukeluar.php');
        } else {
            echo 'Gagal';
            header('location:bahanbakukeluar.php');      
        }
     }
     else {
        $selisih = $jumlahskrng-$jumlah;
        $kurangin = $stockskrng + $selisih;
        $kurangistocknya = mysqli_query($conn,"update bahanbaku set stock='$kurangin' where idbahanbaku='$idb'");
        $updatenya = mysqli_query($conn,"update bahanbakukeluar set jumlah='$jumlah', penerima='$penerima' where idbahanbakukeluar='$idk'");
        if($kurangistocknya&&$updatenya){
          header('location:bahanbakukeluar.php');
        } else {
            echo 'Gagal';
            header('location:bahanbakukeluar.php');      
        }
     }

 }
 //menghapus bahan baku keluar
 if (isset($_POST['hapusbahanbakukeluar'])) {
     $idb = $_POST['idb'];
     $idk = $_POST['idk'];
     $jumlah = $_POST['jumlah'];
     
     $getdatastock = mysqli_query($conn,"select * from bahanbaku where idbahanbaku='$idb'");
     $data = mysqli_fetch_array($getdatastock);
     $stok = $data['stock'];

     $selisih = $stok+$jumlah;

     $update = mysqli_query($conn,"update bahanbaku set stock='$selisih' where idbahanbaku='$idb'");
     $hapusdata = mysqli_query($conn,"delete from bahanbakukeluar where idbahanbakukeluar='$idk'");

     if($update&&$hapusdata){
          header('location:bahanbakukeluar.php');
        } else {
            echo 'Gagal';
            header('location:bahanbakukeluar.php');      
        }
    }

//menambah request bahan baku
  if(isset($_POST['addnewrequestbahanbaku'])){
    $namabahanbaku = $_POST['namabahanbaku'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];

    $addtotable = mysqli_query($conn,"insert into requestbahanbaku (namabahanbaku, deskripsi, jumlah, satuan) values('$namabahanbaku','$deskripsi','$jumlah','$satuan')");
    if ($addtotable) {
            header('location:requestbahanbaku.php');
        } else {
            echo 'Gagal';
            header('location:requestbahanbaku.php');      
        }   
 };

 //update info request bahan baku
 if (isset($_POST['updaterequestbahanbaku'])) {
     $idb = $_POST['idb'];
     $namabahanbaku = $_POST['namabahanbaku'];
     $deskripsi = $_POST['deskripsi'];

     $update = mysqli_query($conn,"update requestbahanbaku set namabahanbaku='$namabahanbaku', deskripsi='$deskripsi' where idbrequestahanbaku='$idb'");
     if ($update) {
            header('location:requestbahanbaku.php');
        } else {
            echo 'Gagal';
            header('location:requestbahanbaku.php');      
        }   
 }

 //menghapus request bahan baku dari stock
  if (isset($_POST['hapusrequestbahanbaku'])) {
     $idb = $_POST['idb'];
     
     $hapus = mysqli_query($conn,"delete from requestbahanbaku where idrequestbahanbaku='$idb'");
     if ($hapus) {
            header('location:requestbahanbaku.php');
        } else {
            echo 'Gagal';
            header('location:requestbahanbaku.php');      
        }   
 }

//menambah request barang
  if(isset($_POST['addnewrequestbarang'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];

    $addtotable = mysqli_query($conn,"insert into requestbarang (namabarang, deskripsi, jumlah) values('$namabarang','$deskripsi','$jumlah')");
    if ($addtotable) {
            header('location:requestbarang.php');
        } else {
            echo 'Gagal';
            header('location:requestbarang.php');      
        }   
 };

 //update info request bahan baku
 if (isset($_POST['updaterequestbarang'])) {
     $idb = $_POST['idb'];
     $namabarang = $_POST['namabarang'];
     $deskripsi = $_POST['deskripsi'];

     $update = mysqli_query($conn,"update requestbarang set namabarang='$namabarang', deskripsi='$deskripsi' where idbrequestbarang='$idb'");
     if ($update) {
            header('location:requestbarang.php');
        } else {
            echo 'Gagal';
            header('location:requestbarang.php');      
        }   
 }

 //menghapus request bahan baku dari stock
  if (isset($_POST['hapusrequestbarang'])) {
     $idb = $_POST['idb'];
     
     $hapus = mysqli_query($conn,"delete from requestbarang where idrequestbarang='$idb'");
     if ($hapus) {
            header('location:requestbarang.php');
        } else {
            echo 'Gagal';
            header('location:requestbarang.php');      
        }   
 }

 //menambah request barang
  if(isset($_POST['addnewpermintaanpembelian'])){
     $idb = $_POST['idb'];
     $user = $_POST['user'];
     $namabahanbaku = $_POST['namabahanbaku'];
     $jumlah = $_POST['jumlah'];
     $satuan = $_POST['satuan'];

    $addtotable = mysqli_query($conn,"insert into permintaanpembelian (user, namabahanbaku, jumlah, satuan) values('$user','$namabahanbaku','$jumlah','$satuan')");
    if ($addtotable) {
            header('location:permintaanpembelian.php');
        } else {
            echo 'Gagal';
            header('location:permintaanpembelian.php');      
        }   
 }

 //update info permintaan pembelian
 if (isset($_POST['updatepermintaanpembelian'])) {
     $idb = $_POST['idb'];
     $user = $_POST['user'];
     $namabahanbaku = $_POST['namabahanbaku'];
     $jumlah = $_POST['jumlah'];

     $update = mysqli_query($conn,"update permintaanpembelian set user='$user', namabahanbaku='$namabahanbaku', jumlah='$jumlah' where idbpermintaanpembelian='$idb'");
     if ($update) {
            header('location:permintaanpembelian.php');
        } else {
            echo 'Gagal';
            header('location:permintaanpembelian.php');      
        }   
 }

 //menghapus request bahan baku dari stock
  if (isset($_POST['hapuspermintaanpembelian'])) {
     $idb = $_POST['idb'];
     
     $hapus = mysqli_query($conn,"delete from permintaanpembelian where idpermintaanpembelian='$idb'");
     if ($hapus) {
            header('location:permintaanpembelian.php');
        } else {
            echo 'Gagal';
            header('location:permintaanpembelian.php');      
        }   
 }
 
 ?>