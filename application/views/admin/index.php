<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thesisku</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/assets/css/stylesheet.css" rel="stylesheet">

    <!--[endif]-->
  </head>
  <body>
    <!-- Nav BAr -->

    <?php
		include "navbar.php";
	?>

<!-- Nav Bar End -->
	<!--strat-->
<div class="accordion horizontal">
    <ul>
        <li>
            <input type="radio" id="vert-1" name="vert-accordion" checked="checked" />
            <label for="vert-1"> EOQ </label>
            <div class="content">
				<div class="col-md-7">
				<img src="<?php echo base_url(); ?>/gambar/big_thumb.jpg" />
				
			</div>
			</div>
        </li>
        <li>
            <input type="radio" id="vert-2" name="vert-accordion" />
            <label for="vert-2">Buffer&nbsp; Stock</label>
            <div class="content">
                <div class="col-md-8">
			<img src="<?php echo base_url(); ?>/gambar/Demand.gif" />
				</div>				
				

			</div>
        </li>
        <li>
            <input type="radio" id="vert-3" name="vert-accordion" />
            <label for="vert-3">ReOrder&nbsp; Point</label>
            <div class="content">
                <div class="col-md-6">
					<img src="<?php echo base_url(); ?>/gambar/16fig11.jpg" />
				</div>				
				
			</div>
        </li>
        	
			</div>
        </li>
    </ul>
</div>
    <!--end-->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
  </body>
</html>