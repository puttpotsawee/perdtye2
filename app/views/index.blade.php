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
              <a href="signup1.html">Signup</a>
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
                    <a href="index.php"><img src="img/logo.png" width="100%"/></a>
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
  <!-- Top item -->
    <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="row clearfix">
        <div class="col-md-1 column">
        </div>
        <div class="col-md-10 column">
                    <?php 
                        for ($x = 0; $x <= 2; $x++) {
                           ?>
                            <div class="row clearfix">
                                
                                    <?php
                                            for ($y = 0; $y <= 2; $y++) {
                                        ?>
                                            <div class="col-md-4 column">
                                    <div class="row clearfix">
                                                    <div class="col-md-1 column">
                                                    </div>
                                            <div class="col-md-11 column">
                                                <div class="row">
 
    <div class="thumbnail">
      <img src="img/i6.png" >
      <div class="caption">
        <h3>iPhone6 64gb Gold</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. ...</p>
          <div class="row clearfix">
              <div class="col-md-6 column">
                <h4 style="color:red;">Price : $300.21</h4>
              </div>
              <div class="col-md-6 column">
                  <a href="#" class="btn btn-default" style="float: right" role="button">Buy Now</a>
              </div>
          </div>
<!--        <p style="margin-right:0px"><a href="#" class="btn btn-primary" role="button">Details</a> <a href="#" class="btn btn-default" role="button">Buy Now</a></p>-->
      </div>
    </div>
  </div>
                            </div>
<!--
                            <div class="col-md-1 column">
                            </div>
-->
                                                </div>
                                  </div>
                                        <?php
                                            } 
                                        ?></div><?php
                        } 
                    ?>
          
        </div>
        <div class="col-md-1 column">
        </div>
      </div>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-12 column">
    </div>
  </div>
    
            <p>&nbsp;</p>
  


  
   <div class="row clearfix">
    <div class="col-md-12 column">
    </div>
  </div>
        </div>
        <!-- Top item -->
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
