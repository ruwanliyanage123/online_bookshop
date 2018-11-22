<?php
$this->load->library('session');
$checking1 = $this->session->userdata('login');
$checking2 = $this->session->userdata('flagForSignUp');
$checking3 = $this->session->userdata('noSignInToSignUp');
/**
 * for checking that if the user has logout or not
 */
if(($checking1=='1')&&($checking2!='1')){
    
    redirect(base_url().'index.php/customer/CustomerRegistrationController/moveToCustomerDashboard');
}

/*
if($checking3!='1'){
    redirect(base_url().'index.php/customer/CustomerRegistrationController/customerLoginView');
}*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel ="stylesheet" href="<?php echo base_url();?>/assets/css/registration_form/styleForRegistration.css">
    <link rel="stylesheet" href="css/styleForRegistration.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

    <div class="main">

        <!-- start of the Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action= <?= base_url("index.php/customer/CustomerRegistrationController/getValesBySignUp")?>>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="confirm_password" id="confirm_password" placeholder="Repeat your password" required/>
                                <span id='message'></span>
                            </div>

                            <script>

                            /*
                            *this code is  use for chck whether the password and re enter passwords are match
                            */
                                $('#password, #confirm_password').on('keyup', function () {
                                if ($('#password').val() == $('#confirm_password').val()) {
                                    $('#message').html('PASSWORDS ARE MATCHING').css('color', 'green');
                                } else 
                                    $('#message').html('YOUR PASSWORDS ARE NOT MATCHING').css('color', 'red');
                                });
                            </script>


                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                            
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url();?>assets/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of the Sign up form -->
        

    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

