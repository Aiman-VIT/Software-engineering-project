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
<h1 class="display-one mt-5">FINALyze   - Business Financial Analyzer</h1>
<a class="display-one mt-5">WELCOME  {{ Auth::user()->name }}</a>
  <a href="product" class="w3-bar-item w3-button w3-padding w3-right">        About us</a>
  <a href="logout" class="w3-bar-item w3-button w3-padding w3-right">        LOGOUT</a>
</div>



<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <br>
  <div class="w3-bar-block">
 
    <div class="w3-container">
    <h5><u>MASTER DATA</u></h5>
    </div>
    <a href="product" class="w3-bar-item w3-button w3-padding">        Product's</a>
    <a href="sku" class="w3-bar-item w3-button w3-padding">        Sku's</a>
    <br>
    <div class="w3-container">
    <h5><u>TRANSACTIONAL DETAILS</u></h5>
    </div>
    <a href="product" class="w3-bar-item w3-button w3-padding">        Sales</a>
    <a href="product" class="w3-bar-item w3-button w3-padding">        Purchases</a>
    <a href="product" class="w3-bar-item w3-button w3-padding">        Investments</a>
    <br>
    <div class="w3-container">
    <h5><u>CALCULLATIONS</u></h5>
    </div>
    <a href="product" class="w3-bar-item w3-button w3-padding">        Margin Calcullation</a>
    <a href="product" class="w3-bar-item w3-button w3-padding">        ROI Calcullation</a>
     
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
  <br>
  <br>
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>PRODUCTS</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-right">
          <h3>598</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>SKU</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
              <img src="{{ asset('images/region.jpg') }}" alt="tag">      
  </div>    
  </div>
@endsection
