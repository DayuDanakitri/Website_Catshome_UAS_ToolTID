<?php include_once("inc_header.php") ?>
<section id="home">
    <img
        src="https://img.freepik.com/free-vector/hand-drawn-international-cat-day-illustration_52683-87848.jpg?t=st=1734440032~exp=1734443632~hmac=ec74bd5f44c9d2cee5562806c2fd32a11522cd6fe17b61471dfb5f4b988c5fcb&w=900" />
    <div class="kolom">
        <p class="deskripsi">Let's be the new home for these cats!</p>
        <h4>At CatsHome, we believe every cat deserves more than just a home.</h4>
        <p><a href="home.php" class="tbl-pink">Learn more</a></p>
    </div>
</section>

<section id="about">
    <div class="kolom">
        <p class="deskripsi">About me!</p>
        <h2>Hey there, cat lovers!</h2>
        <p>Welcome to CatsHome, a cozy little corner dedicated to helping adorable cats find their forever homes. We’re
            here to connect you with your new furry best friend because we believe every kitty deserves a loving family
            and a warm lap to nap on.</p>
        <p>Curious about the human behind Cat's Home? Click the button below to meet the mystery admin!</p>
        <p><a href="about.php" class="tbl-pink">Find Out More</a></p>
    </div>
    <img
        src="https://img.freepik.com/free-vector/hand-drawn-international-cat-day-illustration_52683-87845.jpg?t=st=1734447710~exp=1734451310~hmac=559e6a7fd508f1fe85b850c5eb1e44821f9df5dc548b4dcf6a6581b466e13c85&w=996" />
</section>

<section id="cats">
    <div class="kolom">
        <p class="deskripsi">Our Cats</p>
        <h2>Say hello to some of the cutest, cuddliest, and quirkiest cats you’ll ever meet!</h2>
        <p>From playful kittens to snuggly lap cats, each one of our feline friends has their own unique charm and story
            to share. Take a peek, fall in love, and maybe… just maybe, find your new best friend.</p>
        <p>Because every cat deserves a home, and every home deserves a cat! </p>
        <h5>Scroll down to meet the purr-fect little fluffballs waiting for their forever home! Who knows? Your new best
            friend might just be a paw-swipe away!</h5>
        <p><a href="Pagecats.php" class="tbl-pink">Find Out More</a></p>
    </div>
    <img
        src="https://img.freepik.com/free-vector/hand-drawn-international-cat-day-illustration_23-2149508709.jpg?t=st=1734482122~exp=1734485722~hmac=bf329fa8635b387e78f58770a164ae17cca824c674dfa05523fc107ea6aa28d0&w=740" />
</section>

<?php
include_once("inc/inc_koneksi.php");
$sql1 = "SELECT * FROM cats ORDER BY id DESC LIMIT 3";
$r1 = mysqli_query($koneksi, $sql1);
if (!$r1) {
    echo "Error fetching cats: " . mysqli_error($koneksi);
    exit();
}
?>

<section class="gallery">
    <?php while ($row = mysqli_fetch_assoc($r1)): ?>
        <div class="cats-card" onclick="openSlide(<?php echo $row['id']; ?>)">
            <img src="<?php echo url_dasar() . "/gambar/" . cats_foto($row['id']) ?>" />
            <h3><?php echo $row['nama']; ?></h3>
            <h5 class="read-more">Click here to read more</h5>
        </div>
    <?php endwhile; ?>
</section>

<?php
mysqli_data_seek($r1, 0); 
while ($row = mysqli_fetch_assoc($r1)):
    $isi_singkat = maximum_kata($row['isi'], 20); 
    ?>
    <div class="slide" id="slide<?php echo $row['id']; ?>">
        <img src="<?php echo url_dasar() . "/gambar/" . cats_foto($row['id']) ?>" />
        <p><?php echo $isi_singkat; ?></p>
        <button class="close-btn" onclick="closeSlide(<?php echo $row['id']; ?>)">Tutup</button>
    </div>
<?php endwhile; ?>

<?php include_once("inc_footer.php") ?>