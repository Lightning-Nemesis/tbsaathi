<!DOCTYPE html>
<!-- saved from url=(0046)file:///C:/Users/SidG/Desktop/TB%20Saathi.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TB Saathi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./TB Saathi2_files/logo.png" alt="" width="256" height="256">
        <h2>TB Saathi</h2>
        <p class="lead">Report patient problems.</p>
      </div>

      <div class="row">
        </div>
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Details</h4>
          <form class="needs-validation" novalidate="" method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="firstName"   required="">
                
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="lastName"   required="">
                
              </div>
            </div>

            <div class="mb-3">
              
              
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div><div class="row">
              <div class="col-md-6 mb-3">
                <label for="Age">Age</label>
                <input type="number" class="form-control" name="Age"   required="">
                <div class="invalid-feedback">
                  Valid Age is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="Gender">Gender</label>
                <select class="form-control" name="Gender"   required="">
    <option value="male">Male</option>
    <option value="female">Female</option>
	<option value="other">Other</option>
</select>
                <div class="invalid-feedback">
                  Gender is required.
                </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" required="">
              
            </div>

            

            <div class="row">
              
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" name="state" required="">
                  
                  <option  disabled="">Select State</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" name="zip"  required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
<div class="mb-3">
              <label for="symptoms">Symptoms</label><br>
              <input value="Persisten Dry Cough" type="checkbox" name="s1"> Persistent Dry Cough<br>
<input type="checkbox" value="Low Appetite" name="s2"> Low Appetite<br>
    <input type="checkbox" value="Evening Fever" name="s3"> Evening Fever<br>
            </div>
<div class="mb-3">
              <label for="Comments">Additional Comments</label>
              <input type="text" class="form-control" name="comment"></div>
<div class="mb-3">
              <label for="image">Upload Image/File</label>
              <input type="file" class="form-control" id="image"></div>


            
    <div class="mb-3">
              
				


<div class="mb-3"><br>
              <center><input type="submit" class="btn btn-primary"></center>
            </div></div>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© Phosphorous</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="file:///C:/Users/SidG/Desktop/HealthHack/index.html#">Privacy</a></li>
          <li class="list-inline-item"><a href="file:///C:/Users/SidG/Desktop/HealthHack/index.html#">Terms</a></li>
          <li class="list-inline-item"><a href="file:///C:/Users/SidG/Desktop/HealthHack/index.html#">Support</a></li>
        </ul>
      </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./TB Saathi2_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="file:///C:/Users/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="file:///C:/Users/SidG/assets/js/vendor/popper.min.js"></script>
    <script src="file:///C:/Users/SidG/dist/js/bootstrap.min.js"></script>
    <script src="file:///C:/Users/SidG/assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  

</body></html>
<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="tbsaathi";
 
$fir = filter_input(INPUT_POST, 'firstName');
$las = filter_input(INPUT_POST, 'lastName');
$ema	= filter_input(INPUT_POST, 'email');
$age= filter_input(INPUT_POST, 'Age');
$gen= filter_input(INPUT_POST, 'Gender');
$add= filter_input(INPUT_POST, 'address');
$sta= filter_input(INPUT_POST, 'state');
$zip= filter_input(INPUT_POST, 'zip');
$s1= filter_input(INPUT_POST, 's1');
$s2= filter_input(INPUT_POST, 's2');
$s3= filter_input(INPUT_POST, 's3');
$com= filter_input(INPUT_POST, 'comment');

$conn= new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql="INSERT INTO tbsaathi (First_Name,Last_Name,Email ,Age,Gender,Address,State,Zip,s1,s2,s3,Comments) values ('$fir', '$las','$ema','$age','$gen','$add','$sta','$zip','$s1','$s2','$s3','$com')";
	if ($conn->query($sql)){

	}
	else{
		echo"Error:".$sql."<br>".$conn->error;
	}

$conn->close();
?>

