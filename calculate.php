<?php
include 'functions.php';
$addressFrom = "";
$addressTo = "";
if(!isset($_POST['submit']) && $_POST['roundtrip'] == 'Yes')
{
$addressFrom = $_POST['from'];
$addressTo = $_POST['to'];
$unit = "";
$distance = getDistance($addressFrom, $addressTo, "");
$distance = $distance * 2;

}
else
{
	$addressFrom = $_POST['from'];
$addressTo = $_POST['to'];
$unit = "";
$distance = getDistance($addressFrom, $addressTo, "");

}
?>

<html>
	
<head>
	
	</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/form.js"></script>
<link rel="stylesheet" type="text/css" href="form.css">
	</head>

<div class="container">
    <div class="row">
        <h2>Calculate Mileage</h2>
        <p class="lead">
            Please Enter Locations Traveled Below<br />
       <small class="text-muted">Check out the source code at my Github page <a href="https://github.com/lancehietpas" target="blank">https://github.com/lancehietpas</a></small>
        </p>

        <div class="alert alert-warning">
            <h4>Project Underconstruction</h4>
            This project is constantly under construction with new features being added, check back soon for more updates.
        </div>

        <hr />
			<form action="" method="post">
		  <div class="bs-example" data-example-id="simple-form-inline">
    <form class="form-inline">
      <div class="form-group">
        <label for="exampleInputName2">Beginning Location</label>
        <input type="text" class="form-control" name="from" placeholder="Starting Location">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail2">Ending Location</label>
        <input type="text" class="form-control" name="to" placeholder="Ending Location">
      </div>
					 <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="roundtrip" value="Yes"> Round Trip?
        </label>
    </div>
  </div>
      <button type="submit" class="btn btn-success">Calculate</button>
    </form>
  </div>
					</form>
<div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Mile Driven for Trip</h3>
      </div>
      <div class="panel-body">
        <?php
									echo number_format((float)$distance, 1, '.', '');
								?>
      </div>
</div>
            </div>
            
        </div>
    </div>
	</html>
</div>