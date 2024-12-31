<?php include_once("inc_header.php"); ?>

<p>
    <img 
        src="https://img.freepik.com/free-vector/hand-drawn-international-cat-day-illustration_23-2149508709.jpg?t=st=1734482122~exp=1734485722~hmac=bf329fa8635b387e78f58770a164ae17cca824c674dfa05523fc107ea6aa28d0&w=740" 
        style="width: 50%; float: right;"
        class="note-float-right"
    >
    <strong>Welcome to CatsHome, where every pawprint tells a story and every whisker deserves a happy ending!</strong>
</p>

<p>
    CatsHome is a cozy little corner of the internet dedicated to helping adorable cats find their forever homes. A place
    where love for cats meets the hope of a brighter future for them, a place where we connect kind-hearted people like
    you with the sweetest, fluffiest companions you could ever ask for.
</p>

<p>
    We believe every kitty deserves more than just food and shelter; they deserve a loving family, gentle strokes, and a
    warm lap to curl up on after a long day of playful mischief. Cats bring endless joy, comfort, and charm to our
    lives, and at CatsHome, we are here to help you experience that magic firsthand.
</p>

<p>
    At CatsHome, you will meet a wonderful variety of cats, each with their own personality, quirks, and stories, all
    waiting for someone special to call their own. From the curious little kittens who pounce on anything that moves to
    the calm and wise seniors who just want a peaceful cuddle, every cat here is ready to love and be loved.
</p>

<p>
    So, come on in, take a look around, and let the magic of CatsHome whisk you away. Together, we can make a difference
    in the lives of these lovable cats, one adoption at a time. Because every cat deserves a forever home, and every
    forever home is made brighter with a cat in it.
</p>

<p style="margin: 10px 0px; padding: 10px 0px; transition: 0.3s ease-in-out; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: medium;">
    <br>
</p>

<section class="gallery">
    <?php
    $sql1 = "select * from cats order by id desc";
    $q1 = mysqli_query($koneksi, $sql1);
    while ($r1 = mysqli_fetch_array($q1)) {
        ?>
        <div class="cats-card">
            <a href="<?php echo buat_link_cats($r1['id'])?>">
            <img src="<?php echo url_dasar()."/gambar/".cats_foto($r1['id'])?>"/>
            <h3><?php echo $r1['nama']?></h3>
            <h5 class="read-more">Click here to read more</h5>
            </a> 
        </div>
        <?php
    }
    ?>
<?php include_once("inc_footer.php"); ?>
