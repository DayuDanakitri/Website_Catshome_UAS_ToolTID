<?php include_once("inc_header.php"); ?>

<div class="about-container">
    <h1>About Me</h1>
    <div class="about-content">
        <?php
        $image_url = "https://res.cloudinary.com/dzz4fvnlt/image/upload/v1735572544/photo_2024-12-30_23-13-49_jwwf8b.jpg";
        ?>
        <img src="<?php echo $image_url; ?>" alt="About Me" class="about-image">
        <div class="about-text">
            <p>
                Hi there! Let's get to know each other. I'm one of the students from the Information Technology program
                at Udayana University. Here's a little bit about me:<br>
                Name : Ida Ayu Mas Dwi Danakitri<br>
                NIM : 2405551023<br>
            </p>
            <p>
                I created CatsHome because I believe every cat deserves more than just a home. They deserve a loving
                sanctuary where they can nap in
                sunbeams, chase laser pointers, and remind us humans that we’re merely staff in their majestic kingdoms.
            </p>
        </div>
    </div>
</div>

<?php include_once("inc_footer.php"); ?>