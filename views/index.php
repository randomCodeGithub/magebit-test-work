<?php require_once(VIEW_ROOT . '/templates/header.php');  ?>

<div class="wrapper">
    <section class="authorization">
        <div class="container">
            <div class="row">
                <div id="signUpDiv" class="col-50 col-resp-100 authorization__col-50">
                    <h2>Don't have an account?</h2>
                    <p>Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit, sed do <br>eiusmod tempor incididunt ut labore et <br>dolore magna aliqua.</p><button type="button" id="signUpBtn">Sign Up</button>
                </div>
                <div id="logDiv" class="col-50 col-resp-100 authorization__col-50">
                    <h2>Have an account?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><button type="button" id="loginBtn">Login</button>
                </div>
                <div id="formDiv" class="form-div col-50 col-resp-100">
                    <div id="login" class="form-div__login d-none">
                        <form method="POST">
                            <div class="row">
                                <div class="col-50 text-left header-const">
                                    <h2>Login</h2>
                                </div>
                                <div class="col-50 text-right"><img class="logo" src="<?php echo BASE_ROOT ?>/assets/img/logo.png"></div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label id="loginLabelEmail">Email<span class="text-red">*</span></label></div>
                                    <div class="col-50"><img src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_mail.png" alt="mail"></div>
                                </div><input type="email" id="inputLoginEmail" name="loginEmail" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" required class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label id="loginLabelEmail">Password<span class="text-red">*</span></label></div>
                                    <div class="col-50"><img src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_lock.png" alt="lock"></div>
                                </div><input type="password" id="inputLoginPassword" name="loginPassword" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" required="" class="form-control" value="">
                            </div>
                            <div class="button-group"><button id="loginBtnInForm" type="submit" name="login">login</button><a href="#">Forgot?</a></div>
                        </form>
                    </div>
                    <div id="signUp" class="form-div__sign-up">
                        <form method="POST">
                            <div class="row">
                                <div class="col-50 text-left header-const">
                                    <h2>Sign Up</h2>
                                </div>
                                <div class="col-50 text-right"><img class="logo" src="<?php echo BASE_ROOT ?>/assets/img/logo.png"></div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label id="loginLabelEmail">Name<span class="text-red">*</span></label></div>
                                    <div class="col-50"><img src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_user.png" alt="user"></div>
                                </div><input type="text" id="inputSignupName" name="name" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" required minlength="2" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label id="loginLabelEmail">Email<span class="text-red">*</span></label></div>
                                    <div class="col-50"><img src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_mail.png" alt="mail"></div>
                                </div><input type="email" id="inputSignupEmail" name="email" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label id="loginLabelEmail">Password<span class="text-red">*</span></label></div>
                                    <div class="col-50"><img src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_lock.png" alt="lock"></div>
                                </div><input type="password" id="inputSignUpPassword" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" name="password" required minlength="6" class="form-control" value="">
                            </div>
                            <div class="text-center"><button id="signUpBtnInForm" type="submit" name="submit">Sign Up</button></div>
                        </form>
                    </div>
                    <div class="border-top"></div>
                    <div class="border-middle"></div>
                    <div class="border-bottom"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
if (isset($errors) && is_array($errors)) {
    echo "<script>";
    echo "alert(\"$errorMessage\")";
    echo "</script>";
}
if (isset($result) && $result) {
    echo "<script>";
    echo "alert(\"Successful registration!\")";
    echo "</script>";
}
?>

<?php require_once(VIEW_ROOT . '/templates/footer.php');  ?>