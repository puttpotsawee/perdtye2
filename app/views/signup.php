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
  <title>Perdtye - Sign Up</title>
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
    <link href="css/datepicker.css" rel="stylesheet">

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
    <script src="js/bootstrap-datepicker.js"></script>
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
    <div class="container">
  <!-- FORM -->
   <div class="col-sm-2">
                </div>
                <div class="col-sm-8" style="margin-top:30px">
   <div class="well bs-component">
              <form class="form-horizontal" action="signup" method="post"> 
               
      
                <fieldset>
                  <legend>Tell about yourself</legend>
                  <span class="label label-info">* indicates required field</span>
                  <br></br>

                  <div class="form-group">
                    <label for="inputFirstname" class="col-lg-2 control-label">First name*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" name="name" class="form-control" id="inputFirstname" placeholder="First Name">
                    </div>
                    <label for="inputLastname" class="col-lg-2 control-label">Last name*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" name="surname" class="form-control" id="inputLastname" placeholder="Last Name">
                    </div>
                  </div> 

                  <div class="form-group">
                    <label for="inputStreet" class="col-lg-2 control-label">House No.*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" class="form-control" name="house_number" id="inputStreet" placeholder="House number">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputStreet" class="col-lg-2 control-label">Road*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" class="form-control" name="road" id="inputStreet" placeholder="Road">
                    </div>
                    <label for="inputPostCode" class="col-lg-2 control-label">District*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" class="form-control" name="district" id="inputPostCode" placeholder="District">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputCity" class="col-lg-2 control-label">City*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" class="form-control" name="city" id="inputCity" placeholder="City">
                    </div>
                    <label for="inputPostCode" class="col-lg-2 control-label">Province*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" class="form-control" name="province" id="inputPostCode" placeholder="Province">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputRegion" class="col-lg-2 control-label">Country*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" class="form-control" name="country" id="inputRegion" placeholder="Country">
                    </div>
                    <label for="inputPostCode" class="col-lg-2 control-label">Post Code*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="number required" class="form-control" name="zipcode" id="inputPostCode" placeholder="Post Code">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputTel" class="col-lg-2 control-label">Primary Telephone number*</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" data-validation="swephone" name="phonenumber"id="inputEmail" placeholder="+66812312345">
                    </div>
                    <label for="inputSSN" class="col-lg-2 control-label">ID Number*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="number required length" data-validation-length="min13" class="form-control" name="idcardnumber" id="inputSSN" placeholder="123456789000">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email Address*</label>
                    <div class="col-lg-10">
                      <input type="text" data-validation="email" class="form-control" name="email_confirmation" id="inputEmail" placeholder="Email Address">
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputEmail2" class="col-lg-2 control-label">Re-enter Email Address*</label>
                    <div class="col-lg-10">
                      <input type="text" data-validation="confirmation" class="form-control" name="email" id="inputEmail2" placeholder="Email Address">
                    </div>
                  </div>
                    <h4>Choose your Password</h4>
                    
                   <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label">Create your password*</label>
                    <div class="col-lg-4">
                      <input type="password" class="form-control" data-validation="strength" data-validation-help="Password must be 8 characters including 1 uppercase letter." data-validation-strength="2" name="password_confirmation" id="inputPassword" placeholder="">
                    </div>
                  </div>
                       <div class="form-group">
                    <label for="inputPassword2" class="col-lg-3 control-label">Re-enter your password*</label>
                    <div class="col-lg-4">
                      <input type="password" class="form-control" data-validation="confirmation" name="password" id="inputPassword2" placeholder="">
                    </div>
                  </div>
                           
                  
                                  <h4>User Agreement and privacy policy</h4>
                    <div class="form-group">
                      <div class="col-lg-1"></div>
                      <div class="col-lg-10">

                    <form action="">
                      <input type="checkbox" data-validation="required" name="checkagree" value="Agree">&nbsp;I agree to the following
                        </form>
                      </div>
              
                      <div class="col-lg-offset-1 col-lg-10">
                        <span class="help-block">- I accept the <u>User Agreement</u> which is the terms and conditions that apply to my use of PerdTye dt .com and have read a Privacy Police</span>
                        <span class="help-block">- I may receive communication from PerdTye dot.com and I understand that I can change my notification preferences at any time in my PerdTye dot.com</span>
                        <span class="help-block">- I am at least 15 years old</span>

                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inpuDate" class="col-lg-2 control-label" >Birth Date</label>
                    <div class="col-lg-10" style="width:220px">
                      <!-- <input type="date" class="form-control" id="inputDate" name="inputDate" data-validation="date"> -->
                      <input type="text" class ="form-control datepicker" data-validation="birthdate" data-validation-format="dd/mm/yyyy" id="inputDate" name="birthdate" 
                            placeholder="dd/mm/yyyy"
                            >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                  </div>
                <!-- </form> -->
                </fieldset>
              </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
          </div>
          </div>
           <div class="col-sm-2">
                </div>

  <!--FORM-->

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
        
    <!--BOTTOM-->
  <div class="row clearfix">
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
              <a href="#">Report</a>
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
      $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true
      });
    </script>
    <script>
/* important to locate this script AFTER the closing form element, so form object is loaded in DOM before setup is called */
    $.validate({
        modules : 'date, security, sweden'
        
    });
   
</script>

</body>
</html>
