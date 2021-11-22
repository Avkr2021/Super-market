<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- bootstrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- fafa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <title>TIS Coin</title>
  </head>
  <body >
<!-- php include navbar -->
<?php include('include/navbar.php');  ?>
      <section class="section_comman_border" >
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="profile_name mb-3">
                     <span class="user_icon9"><i class="bi bi-person-fill"></i></span><h4>Tushar Kaushik</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="username mb-3">
                     <p>Username:</p>
                     <label>@tusharka007</label>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="invitatiion mb-3">
                     <p>Referral link to share:</p>
                     <label>minepl.com/tusharka007</label>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="like d-flex justify-content-between align-items-center">
                     <div class="recived">
                        <h5 class="comman_profile">Received reaction </h5>
                     </div>
                     <div>
                        <span class="like_one"><span ><i class="bi bi-hand-thumbs-up"></i> </span>0</span>
                        <span class="like_two"><span><i class="bi bi-hand-thumbs-down"></i> </span>0</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="setting">
                     <h4>Setting</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col comman_border">
                  <div class="hide_name d-flex justify-content-between">
                     <div class="hide_text">
                        <h5 class="comman_profile">Hide Real name</h5>
                        <span>Hide my real name from members of my earning team.</span>
                     </div>
                     <!-- <div class="on_off">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input form-control" id="customSwitch1">   
                        </div>
                        </div> -->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col comman_border">
                  <div class="account">
                     <h5 class="comman_profile">Account verification</h5>
                     <div class="outer_veryfy d-flex justify-content-between align-items-center">
                        <div>
                           <p class="phone_no">Phone number</p>
                           <p>Your Phone number for this account is unverified.</p>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="veryfy">
                           <a href="phone_verificatio.php">VERIFY</a>
                        </div>
                     </div>
                     <div class="outer_facebook d-flex justify-content-between align-items-center align-content-center mb-3">
                        <div class="face_text face_text_two">
                           <p>Facebook Verification</p>
                        </div>
                        <div class="veryfy">
                           <a href="">VERIFY</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col comman_border">
                  <div class="password">
                     <div class="outer_facebook d-flex justify-content-between align-items-center">
                        <div class="face_text">
                           <h5 class="comman_profile">Password</h5>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="veryfy">
                           <a href="">VERIFY</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col comman_border">
                  <div class="deletation">
                     <div class="outer_facebook d-flex justify-content-between align-items-center">
                        <div class="face_text">
                           <h5 class="comman_profile">Account deletion</h5>
                           <p>Tap here to delete your account.</p>
                        </div>
                        <div class="veryfy" >
                           <a style="width: 95px;border: 1px solid;display: block;" class="deletion_green" href="account_deletion.php">See How</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- <section> -->
      <div class="container sign_out_outter">
         <div class="row">
            <div class="col">
               <div class="sign_out text-center">
                  <a href="">SIGN OUT</a>
               </div>
            </div>
         </div>
      </div>
      <!-- </section> -->
      <?php include('include/footer.php'); ?>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/script.js"></script>
   </body>
</html>