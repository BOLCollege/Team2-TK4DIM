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
<!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> Nama Bagian </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    <tr>
                    <?php
                        foreach ($bagians as $data) {
							$no = 1;
                    ?>
                        <!-- <td> <?php echo $no ?> </td> -->
                        <td> <?php echo $data->nama_bagian ?> </td>
                        <td> 
							
						<a href="<?php echo site_url('bagian/edit/'.$data->id_bagian) ?>"
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        <td> 
							<a href="<?php echo site_url('bagian/edit/'.$data->id_bagian) ?>"
                            <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash">
                                    Delete
                                </span>
                            </button>
                            </a> 
                        </td>
                        
                        </tr>
                        <?php
						$no++;
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div>
    <!--end-->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
  </body>
</html>