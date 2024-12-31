<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
$id = dapatkan_id();

$sql1 = "select * from cats where id = '$id'";
$q1 = mysqli_query($koneksi, $sql1);
$n1 = mysqli_num_rows($q1);
$r1 = mysqli_fetch_array($q1);

$nama = $r1['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatsHome</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar()?>'>CatsHome.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar()?>#home">Home</a></li>
                    <li><a href="<?php echo url_dasar()?>#about">About Catshome</a></li>
                    <li><a href="<?php echo url_dasar()?>#cats">Our Cats</a></li>
                    <li><a href="<?php echo url_dasar()?>#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">

<?php
if ($nama == '') {
    echo "<div><p>Maaf data yang anda maksud tidak ditemukan</p></div>";
} else {
    ?>
    <style>
        .lokasi_foto {
            float: left;
            width: 20%;
            margin-top: 20px;
        }

        .lokasi_foto img{
            width: 100%;
            border-radius: 50%;
        }

        .lokasi_deskripsi {
            margin-top: 20px;
            float: right;
            width: 75%;
        }

    </style>
    <div class="lokasi_foto">
        <img src="<?php echo url_dasar()."/gambar/".cats_foto($r1['id'])?>"/>
    </div>
    <div class="lokasi_deskripsi">
        <h1><?php echo $r1['nama'] ?></h1>
        <?php echo set_isi($r1['isi']) ?>
    </div>
    <br style="clear: both"/>
    <?php
}
?>
<?php include_once("inc_footer.php"); ?>
