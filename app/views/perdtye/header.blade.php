<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  @font-face { font-family: Sukhumvit; src: url('fonts/SukhumvitSet.ttc'); } 
  Sukhumvit {
    font-family: Sukhumvit
  }
  </style>
  <style type="text/css">
  body {
   margin-left: 0px;
   margin-top: 0px;
   margin-right: 0px;
   margin-bottom: 0px;
 }
 </style>
 <a name="top"></a>
 <meta charset="utf-8">
 <title>Perdtye</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="">
 <!-- CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
 <link href="css/datepicker.css" rel="stylesheet">
 <!-- Fav and touch icons -->
 <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
 <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
 <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
 <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
 <link rel="shortcut icon" href="img/favicon.png">
 <!-- JS -->
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/scripts.js"></script>
 <script src="js/form-validator/jquery.form-validator.min.js"></script>
 <script src="js/bootstrap-datepicker.js"></script>
</head>

<body>
  <!-- Header -->
  <div class="row clearfix">
    <div class="col-md-12 column">
     <nav class="navbar navbar-default navbar-default-top navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="home">Perdtye</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

          <li>
            <a><b><Sukhumvit>"ประดินันทน์ เพชรเรืองรอง"</Sukhumvit></b></a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

          <li>
           <a href="login">Login</a>
         </li>
         <li>
           <a href="signup">Signup</a>
         </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sell <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="directsell">Direct sell</a></li>
            <li><a href="auctionsell">Auction sell</a></li>
          </ul>
        </li>
        <li>
         <a href="account">Account</a>
       </li>
       <li>
         <a href="#">Logout</a>
       </li>
       <li>
        <a></a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>
<!-- Header -->
<!-- Search -->
<div class="row clearfix bgsearchtop">
  <div class="col-md-1 column">
  </div>
  <div class="col-md-10 column bgsearch">
   <div class="row clearfix">
    <div class="col-md-3 column">
      <div class="row clearfix">
        <a href="home"><img src="img/logo.png" width="100%"/></a>
      </div></div>

      <div class="col-md-9 column search" >
       <form method="get" action="search.php">
        <div class="row clearfix" style="vertical-align:middle">
          <div class="col-md-2 column">

           <select class="form-control" id="select" name="category">
            <option value="all">All Listing</option>
            <option value="auc">Auction</option>
            <option value="buy">Buy it now</option>
          </select>
        </div>
        <div class="col-md-9 column">
          <div class="form-group">
            <input type="text" data-validation="required" class="form-control" id="inputDefault" placeholder="Search" name="search">
          </div>
        </div>
        <div class="col-md-1 column">
          <button type="submit" class="btn btn-info">Search</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<div class="col-md-1 column">
</div>
</div>
<!-- Search -->
<div class="row clearfix">
  <div class="col-md-12 column">
   <p>&nbsp;</p>
 </div>
</div>

<!-- DATA -->
@yield('content')
<!-- DATA -->
<!--BOTTOM-->
<div class="row clearfix" style="margin-top:50px;">
  <div class="col-md-12 column">
    <!-- fixed or non fixed -->
    @yield('footer')
    <!-- <nav class="navbar navbar-default navbar-bottom2" role="navigation"> -->
    <!-- fixed or non fixed -->
      <ul class="nav navbar-nav">
        <li>
          <a>
          </a>
        </li>
        <li>
          <a href="#">FAQ</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="report">Report</a>
        </li>
        <li>
          <a href="#">Privacy</a>
        </li>
        <li>
          <a href="#">Term of use</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right ">
        <li>
          <a  href="#top">Back to top</a>
        </li>
        <li>
          <a></a>
        </li>
      </ul></nav>
    </div>
  </div>
  <!--BOTTOM-->
  <!-- SCRIPT -->
  <script>
  $.validate({
    modules : 'date, security, sweden, file'
  });
  </script>
  <script>
  $('.datepicker').datepicker({
    format: "dd/mm/yyyy",
    autoclose: true,
    todayHighlight: true
  });
  </script>
  <!-- SCRIPT -->
</body>
</html>