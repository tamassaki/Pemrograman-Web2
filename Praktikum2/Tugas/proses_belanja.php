<?php
$customer = $_POST['costumer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$total_harga = ($produk * $jumlah);

if ($produk == 'TV'){
    $total_harga = 4200000 * $jumlah;
} elseif ($produk == 'kulkas'){
    $total_harga = 3100000 * $jumlah;
} elseif ($produk == 'mesin cuci'){
    $total_harga = 3800000 * $jumlah;
} else {
    $total_harga = '';
}
?>

