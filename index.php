<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/branding.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<script src="js/slider.js"></script>-->
  <script src="js/tableToExcel.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">PROJECTS</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.pixabits.co.nf/profile"><span class="glyphicon glyphicon-log-in"></span> Contact Edgar</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>CONVERT TABLE TO EXCEL PROJECT #ID0047</h1>      
    <p>In this project we are creating a table and including a button that converts the table to an Excel spread sheet redy to printed out. It is very essential for handling large tables that you may need to print out from time to time</p>
  </div>
</div>

<div class="container">
  <h2>Demo table</h2>
  <p>Include your own values iin the table </p>            
  <table class="table table-striped" id="convertTableThis">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Home Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Edgar</td>
        <td>Tinkamanyire</td>
        <td>tinka.edgar@gmail.com</td>
        <td>123 123 123 123</td>
        <td>Los Angeles</td>
      </tr>
      <tr>
        <td>Peter</td>
        <td>Duncan</td>
        <td>duncanP@gmail.com</td>
        <td>123 123 123 123</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>Rebecca</td>
        <td>Winters</td>
        <td>rebeccaW@gmail.com</td>
        <td>123 123 123 123</td>
        <td>California</td>
      </tr>
    </tbody>
  </table>
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3"><input type="button" onclick="tableToExcel('convertTableThis', ' ')" value="Export to Excel" class="btn btnExcel"></div>
    <div class="col-sm-3"></div>
  </div>
</div>

 
 

</div>


<br><br>

<footer class="container-fluid text-center stick-bottom">
  <p><a href="http://www.pixabits.co.nf/profile"> Copyright  2018  Edgar Tinkamanyire Edgar </a></p>
</footer>


</body>

</body>
</html>
