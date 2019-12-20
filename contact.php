<?php include "INCLUDES/header.php" ?>
<?php include "INCLUDES/db.php" ?>
<!-- end s-header -->


    <!-- page header
    ================================================== -->
    <section class="page-header page-header--contact">

        <div class="gradient-overlay"></div>
        <div class="row page-header__content">
            <div class="column">
                <h1>Contact Us</h1>
            </div>
        </div>

    </section> <!-- end page-header -->


    <!-- page content
    ================================================== -->
    <section class="page-content">

        <div class="row">
            <div class="column">

                <p class="lead drop-cap">
                Corrupti voluptas sed possimus odio cupiditate. Ut id nemo doloremque 
                iusto voluptates placeat esse ut. Voluptatem saepe aut vel ut. Perferendis 
                hic voluptates quibusdam animi quis est itaque. Atque delectus praesentium 
                voluptas voluptas. Odio voluptatem facilis magni magnam quas aut quasi.                 
                </p>

                <p>
                Nam est quae harum doloribus illum consequatur cupiditate quod rem. Error 
                qui culpa. Porro cupiditate veniam assumenda nostrum eius. Tempore rerum eos.
                Est perferendis nesciunt corrupti quia sunt reprehenderit id autem. 
                Quis in voluptates perspiciatis. Voluptatem saepe aut vel ut reprehenderit id
                perferendis.
                </p>

                <div class="row">
                    <div class="column large-6 tab-full">
                        <h3>Main Office.</h3>
                        <p>
                        PARAKUO JUNCTION, ACHIMOTA .<br>
                        Mountain View GH<br>
                        Mon-Thur 8:30am – 4:30pm 
                        </p>
                    </div>

                    <div class="column large-6 tab-full">
                        <h3>Contact Info.</h3>
                        <p>
                        sayhello@Refem.com<br>
                        info@Refem.com <br>
                        Phone: +197 543 2345
                        </p>
                    </div>
                </div>


                <h2>Get In Touched.</h2>


<?php
$message ="All fields are needed!!";// This is in the PHP file and sends a Javascript alert to the client

 if (isset($_POST['submit'])) {
     if($_POST['full_name']==""||$_POST['Email']==""||$_POST['address']==""||$_POST['cMessage']==""){
   
    echo "<script type='text/javascript'>alert('$message');</script>";// This is in the PHP file and sends a Javascript alert to the client
        
     }else{
      $full_name = $_POST['full_name'];
      $Email = $_POST['Email'];
      $address = $_POST['address'];
      $cMessage = $_POST['cMessage'];

$query = "INSERT INTO contact(full_name, email, address, message) VALUES ('{$full_name}', '{$Email}', '{$address}', '{$cMessage}') ";
mysqli_query($connection,$query);

}}

?>







                <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                    <fieldset>

                        <div class="form-field">
                            <input name="full_name" id="full_name" class="h-full-width h-remove-bottom" placeholder="Your Name" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="Email" id="Email" class="h-full-width h-remove-bottom" placeholder="Your Email" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="address" id="address" class="h-full-width h-remove-bottom" placeholder="address" value="" type="text">
                        </div>

                        <div class="message form-field">
                            <textarea name="cMessage" id="cMessage" class="h-full-width h-remove-bottom" placeholder="Your Message"></textarea>
                        </div>

                        <br>

                        <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large h-full-width" value="Send Message" type="submit">

                    </fieldset>
                </form>

            </div>
        </div>

    </section> <!-- end page-content -->


    <!-- Social
    ================================================== -->
   <?php 
include "INCLUDES/section.php"
?>

    <!-- footer
    ================================================== -->
    <?php include "INCLUDES/footer.php"  ?> 

    
    <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>