@extends('layouts.app') @section('content')
<html>
<head>
<title>FINALyze</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
<h1 class="display-one mt-5">FINALyze   - Financial Analyzer for U R Business</h1>
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <div class="w3-bar-item w3-button w3-padding w3-right"><a href="/logout" class="btn btn-outline-primary"><b>LOGOUT</b></a></div>
  <div class="w3-bar-item w3-button w3-padding w3-right"><a href="/product" class="btn btn-outline-primary"><b>BACK</b></a></div>
  
</div>
<br>
<br>
<br>
<h5> <b><u>ADD product </u></b></h5>
<br>
<br>


<div class="container">
	<div class="row">
		 	<form id="add-frm" method="POST" action="" >
            
				<div class="control-group col-6 text-left">
					<label for="p_code"><b>Product Code:</b></label>
					
						<input type="text" id="p_code" class="form-control mb-4" name="p_code"label="PRODUCT CODE"
							placeholder="Enter Product Code" required>
					
				</div>

                <div class="control-group col-6 text-left">
					<label for="p_name"><b>Product Name:</b></label>
					
						<input type="text" id="p_name" class="form-control mb-4" name="p_name"label="PRODUCT NAME"
							placeholder="Enter Product Name" required>
					
				</div>


                <div class="control-group col-6 text-left">
					<label for="p_desc"><b>Product Desc:</b></label>
					
						<input type="text" id="p_desc" class="form-control mb-4" name="p_desc"label="PRODUCT DESC"
							placeholder="Enter Product desc" required>
					
				</div>


				<br>
                <br>
				

				@csrf

                <script>
                    function cancel() {
                         window.history.back();
                                        }
                </script>


				
                <div class="w3-bar-item w3-button w3-padding w3-center control-group col-6 text-center"><button type="submit" class="btn btn-outline-primary"><h7 style="color:DarkBlue;"><b>SAVE</b></h7></button></div>
                <div class="w3-bar-item w3-button w3-padding w3-center"><button onclick="cancel()"><h7 style="color:DarkBlue;"><b>CANCEL</b></h7></button></div>

               
			</form>
		</div>
	</div>
</div>
@endsection
