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
  <div class="w3-bar-item w3-button w3-padding w3-right"><a href="/dashboard" class="btn btn-outline-primary"><b>BACK</b></a></div>
  <div class="w3-bar-item w3-button w3-padding w3-right"><a href="/logout" class="btn btn-outline-primary"><b>LOGOUT</b></a></div>
</div>
<br>
<br>
<br>
<br>

            <div class="w3-container">
    
    <div class="w3-bar-item w3-button w3-padding w3-right"><a href="/product/create" class="btn btn-outline-primary"><b><h7 style="color:DarkBlue;"><b>CREATE NEW PRODUCT</b></h7></a></div>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
				<thead>
					<tr>
						<th scope="col">PROD CODE</th>
                        <th scope="col">PROD NAME</th>
                        <th scope="col">DESC.</th>
						
                    </tr>
				</thead>
				<tbody>
					@forelse($products as $product)
					<tr>
						<td>{!! $product->p_code !!}</td>
                        <td>{!! $product->p_name !!}</td>
                        <td>{!! $product->p_desc !!}</td>

						<td>
                        <a href="product/{!! $product->id !!}/edit" class="btn btn-outline-primary"><h7 style="color:DarkBlue;"><b>edit</b></h7>   </a></td>
                        <td><a href="product/{!! $product->id !!}/delete"  	class="btn btn-outline-primary"><h7 style="color:DarkBlue;"><b>delete</b></h7>  </a>
                        </td>

					</tr>
					@empty
					<tr>
						<td colspan="3">No products found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>



@endsection
