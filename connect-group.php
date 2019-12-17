<?php include "INCLUDES/header.php" ?>
<?php include "INCLUDES/db.php" ?>
<!-- end s-header -->


<!-- page header
    ================================================== -->
<section class="page-header page-header--connect">

    <div class="gradient-overlay"></div>
    <div class="row page-header__content">
        <div class="column">
            <h1>Connect Groups</h1>
        </div>
    </div>

</section> <!-- end page-header -->


<!-- page content
    ================================================== -->
<section class="page-content">

    <div class="row">
        <div class="column">

            <p class="lead drop-cap">
                Vel quia voluptates sit expedita nesciunt. Iusto et eos quod consectetur
                nostrum aliquid est laudantium. Corrupti voluptas sed possimus odio cupiditate.
                Ut id nemo doloremque iusto voluptates placeat esse ut. Voluptatem saepe aut vel ut. Perferendis
                hic voluptates quibusdam animi quis est itaque. Atque delectus praesentium
                voluptas voluptas. Odio voluptatem facilis magni magnam quas aut quasi.
                Eos nesciunt ducimus debitis inventore sed.
            </p>

            <p>
                Molestias nostrum aliquid repudiandae et. Adipisci omnis dolores sint
                dignissimos quae deserunt recusandae mollitia ab. Sequi rem odio molestiae
                hic repellendus odit molestiae enim aut. Itaque omnis tenetur libero rerum
                vel impedit ut saepe. Aut deleniti ex omnis libero. Deleniti minus voluptatem
                reiciendis molestiae omnis voluptate voluptatem. In odio voluptatem error
                asperiores aut dolore. Deserunt ullam deleniti est aperiam.
            </p>

            <br>

            <h2>Join a Connect Group.</h2>

            <p>
                Kindly fill-up the form below to help us better understand your profile and help you connect to a
                connect group that suits you.
            </p>
            <?php 
if (isset($_POST['submit'])) {
            $names = $_POST['names'];
            $email = $_POST['email'];
            $mobile_number = $_POST['mobile_number'];
            $facebook_url = $_POST['facebook_url'];
            $age = $_POST['age'];
            $availabilit = $_POST['availabilit'];
            $Gender = $_POST['Gender'];
            $Comments = $_POST['Comments'];


//    $query = "INSERT INTO refem_church(Names, email, mobile_number, facebook_url,ministry_volunteer,first_time, comments)";
//     $query .= " VALUES ('{$Names}','{$email}',$mobile_number,'{$facebook_url}','{$ministry_volunteer}','{$first_time}','{$comments}') ";
$query =  "INSERT INTO groups (names, email, mobile_number, facebook_url, age, availabilit, Gender, Comments) VALUES ('{$names}','{$email}','{$mobile_number}','{$facebook_url}','{$age}','{$availabilit}','{$Gender}','{$Comments}') ";

    $create_group = mysqli_query($connection, $query);
    // if (!$create_refem) { //if there is no connection
        // die('QUERY FAILED' . mysqli_error($connection));
    // }




   }
      ?>

            <form names="connectForm" id="connectForm" class="connectForm" method="POST" action="connect-group.php" autocomplete="off">
                <fieldset>

                    <div class="form-field">
                        <input names="names" id="names" class="h-full-width h-remove-bottom" placeholder="Your Names"
                            value="" type="text">
                    </div>

                    <div class="form-field">
                        <input names="email" id="email" class="h-full-width h-remove-bottom" placeholder="Your Email"
                            value="" type="text">
                    </div>

                    <div class="form-field">
                        <input names="mobile_number" id="mobile_number" class="h-full-width h-remove-bottom"
                            placeholder="Mobile Number" value="" type="tel">
                    </div>

                    <div class="form-field">
                        <input names="facebook_url" id="facebook_url" class="h-full-width h-remove-bottom"
                            placeholder="Facebook URL" value="" type="text">
                    </div>

                    <div class="form-field">
                        <input names="age" id="age" class="h-full-width h-remove-bottom" placeholder="Your Age"
                            value="" type="text">
                    </div>

                    <div class="form-field">
                        <input names="availabilit" id="availabilit" class="h-full-width h-remove-bottom"
                            placeholder="Availability (Day & Time)" value="" type="text">
                    </div>

                    <br>
                        <div class="form-field">
                            <label for="Gender">Gender :</label>
                            <div class="ss-custom-select">
                                <select class="h-full-width h-remove-bottom" names="Gender" id="Gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                    <div class="comments form-field">
                        <textarea names="Comments" id="Comments" class="h-full-width h-remove-bottom"
                            placeholder="Comments & Questions"></textarea>
                    </div>

                    <br>

                    <button names="submit" id="submit" class="btn btn--primary btn--large h-full-width"
                        value="Get Connected" type="submit">Get Connected</button>

                </fieldset>
            </form> <!-- end connectForm -->

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