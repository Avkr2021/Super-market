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
<?php include('include/navbar.php'); 	?>
<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="veryfy_phoine_number">
					<h4>Verify Your Phone Number</h4>
				</div>
				<div class="code">
					<h5>Option 1 : Receive a verification code</h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="translatiuon">
					<div class="inner_translatiuon">
						<p>Translation not Found</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="code">
					<h5>Option 1 : Receive a verification code</h5>
					<span>Service In</span>
					 <select>
						<option>USA</option>
						<option>India</option>
					</select>
				</div>
				<div class="us2">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="start_btn">
					<a data-toggle="modal" data-target="#verification" href="">START</a>
				</div>
				<div class="manual">
					<a href="">Manual instructions</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <a href="javascript:void(0);" ><span class="share"><i class="bi bi-share-fill"></i></span>Verification</a> -->




<!-- modal verification -->
<div class="modal fade" id="verification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="top:0;">
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4>Manual Steps</h4>
        <div class="english_text">
        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text <span>Service In</span>
					 <select>
						<option>USA</option>
						<option>India</option>
					</select> Lorem Ipsum is simply</p>
        </div>
        <div class="receipent">
        	<div style="text-align: center;"><span class="recipt">Recipient:</span> +091213456789</div>
        	<div class="sms">
        		<label>Text of the SMS</label>
        		<br>
        		<span class="code_sms">2222</span>
        	</div>
        </div>
        <div class="make">
        	<p>Lorem Ipsum is simply dummy text of the printing and typesettin <span class="mobile_no">+091213456789</span></p>
        </div>
        <div class="dismis">
        	<a class="dismis_one" href="">Sent the Massage</a>
        	<br>
        	<a class="dismis_two dismis_one" href="">Dismiss</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('include/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
  </body>
</html>