<!doctype html>
<html lang="en" class="no-js">
  <html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--- links for bootstrap and css  --->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/payment.css" />
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/payments.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6023332cf2.js" crossorigin="anonymous"></script>
    <title>Wmsu Collection System</title>
    </head>
      <body>
      <div class="d-flex" id="wrapper">
        <!-- Sidebar with bootstrap -->
        <div class="bg-white" id="sidebar-wrapper">
            <img src="../images/logo.jpg" width ="200" alt="CCS COLLECTION FEE">
			<div class="list-group list-group-flush my-3">
                <a href="../admin/dashboard.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Dashboard</a>
                <a href="../fees/fees.php" class="list-group-item list-group-item-action bg-hover first-text  fw-bold ">Fees</a>
                <a href="../payment/payment.php" class="list-group-item list-group-item-action bg-hover first-text fw bold active">Payment</a>
                <a href="../payment-records/payment-records.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Payment Records</a>
                <a href="../students/students.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Students</a>
                <a href="../financial-report/financial-report.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Financial Report</a>
                <a href="../audit-log/audit-log.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Audit Log</a>
                <a href="../csc-management/csc-management.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">CSC Management</a>
                <a href="../admin-settings/admin-settings.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Admin Settings</a>
                <a href="../public/logout.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Logout</a>
            </div>
        </div>
		<div class="table-responsive">
	<div id="page-content-wrapper">
<!-- Dashboard hamburger      -->
    <nav class="navbar navbar-expand-lg navbar-light bg-active py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0" style="color:#000000; font-weight: 400;">Payments</h2>
        </div>
    </nav>
    <div class="container">
		<div class="row justify-content-center">
			<div class="justify-content-center">
				<div class="">
					<form id="form">
						<ul id="progressbar">
							<li class="active" id="step1">
								<strong>Search User</strong>
							</li>
							<li id="step2"><strong>Balance</strong></li>
							<li id="step3"><strong>Payment Details</strong></li>
							<li id="step4"><strong>Transaction Complete</strong></li>
						</ul>
						<div class="progress">
							<div class="progress-bar"></div>
							
						</div> <br>
						
						<!-- <div class ="row justify-content-center"> -->
						<fieldset>
						<div class="row mt-5" id="idolo">
						<div class="col-md-8 mx-auto">
           				 <div class="input-group">
                		<input class="form-control" type="search" id="example-search-input" placeholder ="Search Name or ID">
                		<span class="input-group-append">
                   		 <button class="btn btn-outline-secondary bg-white ms-n5" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
  							<input type="button" name="next-step"
								class="next-step" id ="strepsils" value="Next Step" />
								
						</fieldset>
						<fieldset>
              <div class ="container-fluid">
						<div class="card">
  <div class="card-body-sm">
    <div class="container-sm">
        <div class="row">
          <div class="col-xl-6">
          <div class ="col-x-6">
          <img src="../images/CCS.jpg" width ="135px" alt="CCS LOGO" style="padding: 10px; float:right; margin-right: -490px;" >  
          </div>
            <ul class="list-unstyled" style="text-align: left;">
              <li class="text-muted"><span style="color:#5d9fc5 ; font-weight:bold;">sl202203664</span></li>&nbsp;
              <li class="text-muted" style="font-weight: 600;">Gregory D. Yames</li>
              <li class="text-muted"  style="font-weight: 600;">College:</i>College of Computing Studies</li>
              <li class="text-muted"  style="font-weight: 600;">Balance:</i>Php 0.0</li>
              <li class="text-muted"  style="font-weight: 600;">Staus:</i>Enrolled</li>
            </ul>
          </div>
          <div class="table-responsive" id="bilat">
        <div class="row my-2 mx-1 justify-content-center" style="display: block;">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#95BDFE ;" class="text-white">
              <tr>
                <th scope="col" style = " color: #000000;" >Id</th>
                <th scope="col" style = " color: #000000;" >Payment Type</th>
                <th scope="col" style = " color: #000000;" >Description</th>
                <th scope="col" style = " color: #000000;" >Semester</th>
                <th scope="col" style = " color: #000000;" >Date</th>
                <th scope="col" style = " color: #000000;" >Total</th>
                <th scope="col" style = " color: #000000;" >Status</th>
                <th scope="col" style = " color: #000000;" >Balance</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CSC</td>
                <td>College Student Council</td>
                <td>1</td>
                <td>11/2/2022</td>
                <td>Php 200.00</td>
                <td>Paid</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>	
</div>
                            <div class="col-md-8">
                                <div class="balance">
                            </div>
                            </div>
                            </h2>

							<input type="button" name="next-step"
								class="next-step" value="Proceed To Payment" style="width: 160px;" />
						</fieldset>

						<fieldset>
            <table class="table">
  <thead>
    <tr>
      <th scope="col" style="text-align: left; background-color: #95BDFE;"><b>USC Fee</b></th>
    </tr>
  </thead>
</table>
<div class ="container-fluid">
        <div class="col-sm-2" id="USC" style="font-weight: 500;">
				<a><span>CSC Fee</span></a>
        <input type="text" id="fee" name="fee" placeholder="Php 200.00" style="padding: 8px; padding-left: 100px; background-color: #EBEBEB; border-color: #EBEBEB; margin-left: 27px;"><br><br>
        </div>
            </div>
      <hr style="width: 100%; background-color: black; height:6px;"/>
        <table class="table">
  <thead>
    <tr>
      <th scope="col" style="text-align: left; background-color: #95BDFE;"><b>CCS Fees</b></th>
    </tr>
  </thead>
</table>
<div class="col-sm-2" id="CCSFee" style="font-weight: 500;">
				<a><span>Gardening</span></a>
        <input type="text" id="feeCCS" name="feeCCS" placeholder="Php 60.00" style="padding: 8px; padding-left: 100px; background-color: #EBEBEB; border-color: #EBEBEB; margin-left: 27px;"><br><br>
        </div>


    
                
              <input type="button" name="next-step"
								class="next-step" value=" Pay" />
						</fieldset>
            
						<fieldset>
            <div class ="container-fluid">
            <div class="col-sm-12">
            <img src="../images/doggie.jpg" width="500px" alt="Doggier" style="width: 60%;">
            </div>
            <h2 style="color: Black; font-weight: 300;"> PAYMENT COMPLETED SUCCESSFULLY! </h2><div class="col-sm-8" id="doggie" style="margin-left: -35px;">
          </div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
  
</body>       
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");
        
                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>
<script src="script.js"></script>

</html>
<script>
    $(document).ready(function () {
	var currentGfgStep, nextGfgStep, previousGfgStep;
	var opacity;
	var current = 1;
	var steps = $("fieldset").length;

	setProgressBar(current);

	$(".next-step").click(function () {

		currentGfgStep = $(this).parent();
		nextGfgStep = $(this).parent().next();

		$("#progressbar li").eq($("fieldset")
			.index(nextGfgStep)).addClass("active");

		nextGfgStep.show();
		currentGfgStep.animate({ opacity: 0 }, {
			step: function (now) {
				opacity = 1 - now;

				currentGfgStep.css({
					'display': 'none',
					'position': 'relative'
				});
				nextGfgStep.css({ 'opacity': opacity });
			},
			duration: 500
		});
		setProgressBar(++current);
	});

	$(".new-payment").click(function () {

		currentGfgStep = $(this).parent();
		newpaymentGfgStep = $(this).parent().new();

		$("#progressbar li").eq($("fieldset")
			.index(currentGfgStep)).removeClass("active");

      newpaymentGfgStep.show();

		currentGfgStep.animate({ opacity: 0 }, {
			step: function (now) {
				opacity = 1 - now;

				currentGfgStep.css({
					'display': 'none',
					'position': 'relative'
				});
				newpaymentGfgStep.css({ 'opacity': opacity });
			},
			duration: 500
		});
		setProgressBar(--current);
	});

	function setProgressBar(currentStep) {
		var percent = parseFloat(100 / steps) * current;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width", percent + "%")
	}

	$(".submit").click(function () {
		return false;
	})
});
</script>