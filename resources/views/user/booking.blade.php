<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- icons
    ================================================== -->
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/Tsuki.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/Tsuki.png">

	<title>Tsuki booking</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/booking.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Make your reservation</h2>
								<p>Unfortunately, we are fully booked for the upcoming 3 years</p>
                
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Amount of guests</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
                      <option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								
							<div class="form-group">
								<span class="form-label">Room Type</span>
								<select class="form-control" required>
									<option value="" selected hidden>Select room type</option>
									<option>Private dinning Room (£400 per head)</option>
									<option>General dinning room (£250 People)</option>
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Check availability</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>