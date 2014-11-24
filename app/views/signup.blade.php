@extends('newLayout')

@section('content')
<!-- FORM -->
   <div class="col-sm-2">
                </div>
                <div class="col-sm-8" style="margin-top:30px">
   <div class="well bs-component">
              <form class="form-horizontal" action="signupcheck.html" method="get"> 
               
      
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
                    <label for="inputStreet" class="col-lg-2 control-label">Street Address*</label>
                    <div class="col-lg-10">
                      <input type="text" data-validation="required" class="form-control" name="house_number" id="inputStreet" placeholder="Street Address1">
                    </div>
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="text" class="form-control" name="road" id="inputStreet2" placeholder="Street Address2">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputCity" class="col-lg-2 control-label">City*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" class="form-control" name="city" id="inputCity" placeholder="City">
                    </div>
                   <!--  <label for="inputLastname" class="col-lg-2 control-label">Region*</label>
                    <div class="col-lg-4">
                      <select class="form-control" id="inputCountry">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                    </div> -->
                  </div>

                  <div class="form-group">
                    <label for="inputRegion" class="col-lg-2 control-label">Region*</label>
                    <div class="col-lg-4">
                      <input type="text" data-validation="required" class="form-control" name="country" id="inputRegion" placeholder="Region">
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
@stop

