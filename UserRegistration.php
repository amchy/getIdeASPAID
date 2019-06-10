<?php
	include_once("header.php");
?>
	
	
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away!</p>
                        <a href="login.php"><input type="submit" name="" value="Login"/></a><br/>
                    </div>
                    <div class="col-md-9 register-right">
<!--                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">-->
<!--
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">IdeaGenerator</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Investor</a>
                            </li>
                        </ul>
						<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
-->
                           
<!--                        </ul>-->
						<form action="newRegistration.php" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply Now</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" name="fname" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Middle Name *" name="mname" value="" />
                                        </div>
										<div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" value="" />
                                        </div>
										<div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username *" name="uname" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="pwd" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" name="pwd2" value="" />
                                        </div>
                                        <div class="form-group"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email" value="" />
                                        </div>
										<div class="form-group">
                                            <div class="radio">
  <label><input type="radio" name="sex" value="male">Male</label>
</div>
<div class="radio">
  <label><input type="radio" name="sex" value="female">Female</label>
</div>
<div class="radio">
  <label><input type="radio" name="sex" value="others">Others</label>
</div>
                                        </div>
										<div class="form-group">
                                            <input type="date" minlength="10" maxlength="10" name="dob" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group"> </div>
                                        <div class="form-group">
                                            <select class="form-control" name="sq">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
												<option>What is your Spouse name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="sa" class="form-control" placeholder="Enter Your Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister primary"  value="Register"/>
										</form>
                                    </div>
                                </div>
							
								
                            </div>
<!--
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Investor</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>

            </div>
<br>
							<br>
<br>
							<br>
<?php
	include_once("footer.php");
?>
