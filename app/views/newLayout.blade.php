<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    @font-face { font-family: Sukhumvit; src: url('SukhumvitSet.ttc'); } 
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
  <title>Perdtye - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
  <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
  <!--script src="js/less-1.3.3.min.js"></script-->
  <!--append ‘#!watch’ to the browser URL, then refresh the page. -->
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="js/form-validator/jquery.form-validator.min.js"></script>
  </head>

  <body>
    <!-- Header -->
    <div class="row clearfix">
      <div class="col-md-12 column">
        <nav class="navbar navbar-default navbar-default-top navbar-fixed-top" role="navigation">
          <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Perdtye</a>
         </div>

         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

            <li>
              <a><b><Sukhumvit>"ประดินันทน์ เพชรเรืองรอง"</Sukhumvit></b></a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li>
              <a href="login1.html">Login</a>
            </li>
            <li>
              <a href="kuy2">Signup</a>
            </li>
            <li>
              <a href="sellauctiontype.html">Sell</a>
            </li>
            <li>
              <a href="account.php">Account</a>
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
            <a href="kuy"><img src="img/logo.png" width="100%"/></a>
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

 @yield('content')

 <!--BOTTOM-->
 <div class="row clearfix" style="margin-top:20px;">
  <div class="col-md-12 column">
    <nav class="navbar navbar-default navbar-bottom2" role="navigation">

      <ul class="nav navbar-nav">
        <li><a></a></li>
        <li>
          <a href="#">FAQ</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="report.html">Report</a>
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
  <script>
    /* important to locate this script AFTER the closing form element, so form object is loaded in DOM before setup is called */
    $.validate({
      modules : 'date, security, sweden'

    });

  </script>


</body>
</html>
