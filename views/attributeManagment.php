<?php require_once(VIEW_ROOT . '/templates/header.php');  ?>

<h1>Hello <?php echo $user['name'] ?></h1>
<a href="<?php echo HOME_ROOT; ?>/cabinet/logout">Logout</a>
<!-- <section>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-100 text-center">
                <h1>Hello <?php echo $user['name'] ?></h1>
                <a class="text-red" href="<?php echo HOME_ROOT; ?>/cabinet/logout">Logout</a>
            </div>

        </div>
    </div>
    <div class="container vh-100 d-flex justify-content-center align-items-center ">
        <div class="row bg-dark-blue text-white pos-rel">

            <div id="signUpDiv" class="col">
                <h2>Your attributes</h2>
                <p>
                    <ul>
                        <?php foreach ($userAttributes as $attribute) : ?>

                            <li><?php echo $attribute['attr_name'] . ': ' . $attribute['attr_value'] ?></li>

                        <?php endforeach ?>
                    </ul>
                </p>

                <button type="button" id="signUpBtn">All Attributes</button>
            </div>
            <div id="logDiv" class="col">
                <h2>All created attributes</h2>
                <p>
                    <ul>
                        <?php foreach ($allAttributes as $attribute) : ?>

                            <li><?php echo $attribute['attr_name'] ?></li>

                        <?php endforeach ?>
                    </ul>
                </p>
                <button id="loginBtn">Your attributes</button>
            </div>
            <div id="formDiv" class="slide-right col pos-abs d-flex justify-content-center flex-column align-items-center">

                <?php
                if (isset($errors) && is_array($errors)) {
                    echo "<script>";
                    echo "alert(\"$errorMessage\")";
                    echo "</script>";
                }
                ?>

                <form id="login" method="POST" class="pos-abs">
                    <div class="row justify-content-between">
                        <div class="col text-left">
                            <h2 class="">Attribute Adding</h2>
                        </div>
                        <div class="col text-right"><img src="<?php echo BASE_ROOT; ?>/assets/img/logo.png" alt=""></div>
                    </div>

                    <div class="form-group">
                        <label for="inputAttrName">Attribute Name<span class="text-red">*</span></label>
                        <input type="text" id="inputAttrName" name="attrName" required minlength="2" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Attribute Value<span class="text-red">*</span></label>
                        <input type="text" id="inputName" name="attrValue" value="" required minlength="2" class="form-control">
                    </div>
                    <div class="text-center">
                        <button id="loginBtnInForm" type="submit" name="addAttribute">Add attribute</button>
                    </div>
                </form>

                <form action="#" method="POST" id="signUp" class="pos-abs d-none hide ">
                    <div class="row justify-content-between">
                        <div class="col text-left">
                            <h2 class="">Attribute Adding</h2>
                        </div>
                        <div class="col text-right"><img src="<?php echo BASE_ROOT; ?>/assets/img/logo.png" alt=""></div>
                    </div>

                    <div class="form-group">
                        <label for="inputAttrName">Attribute Name<span class="text-red">*</span></label>
                        <input type="text" id="inputAttrName" name="attrName" required minlength="2" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Attribute Value<span class="text-red">*</span></label>
                        <input type="text" id="inputName" name="attrValue" value="" required minlength="2" class="form-control">
                    </div>
                    <div class="text-center">
                        <button id="loginBtnInForm" type="submit" name="addAttribute">Add attribute</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->

<div class="wrapper">
    <section class="authorization">
        <div class="container">
            <div class="row">
                <div id="signUpDiv" class="col-50 col-resp-100 authorization__col-50">
                    <h2>All created attributes</h2>
                    <p>
                        <ul>
                            <?php foreach ($allAttributes as $attribute) : ?>

                                <li><?php echo $attribute['attr_name'] ?></li>

                            <?php endforeach ?>
                        </ul>
                    </p><button type="button" id="signUpBtn">Your attributes</button>
                </div>
                <div id="logDiv" class="col-50 col-resp-100 authorization__col-50">
                    <h2>Your attributes</h2>
                    <p>
                        <ul>
                            <?php foreach ($userAttributes as $attribute) : ?>

                                <li><?php echo $attribute['attr_name'] . ': ' . $attribute['attr_value'] ?></li>

                            <?php endforeach ?>
                        </ul>
                    </p>
                    <button type="button" id="loginBtn">Add attribute</button>
                </div>
                <div id="formDiv" class="form-div col-50 col-resp-100">
                    <div id="login" class="form-div__login d-none">
                        <form method="POST">
                            <div class="row">
                                <div class="col-50 text-left header-const">
                                    <h2>Add atribute</h2>
                                </div>
                                <div class="col-50 text-right"><img class="logo" src="<?php echo BASE_ROOT ?>/assets/img/logo.png"></div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label id="loginLabelEmail">Name<span class="text-red">*</span></label></div>
                                    <div class="col-50"></div>
                                </div><input type="text" name="attrName" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" required class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label id="loginLabelEmail">Value<span class="text-red">*</span></label></div>
                                    <div class="col-50"></div>
                                </div><input type="text" name="attrValue" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" required class="form-control" value="">
                            </div>
                            <div class="button-group"><button id="loginBtnInForm" name="addAttribute" type="submit">Add</button></div>
                        </form>
                    </div>
                    <div id="signUp" class="form-div__sign-up">
                        <form method="POST">
                            <div class="row">
                                <div class="col-50 text-left header-const">
                                    <h2>Update</h2>
                                </div>
                                <div class="col-50 text-right"><img class="logo" src="<?php echo BASE_ROOT ?>/assets/img/logo.png"></div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label>Name<span class="text-red">*</span></label></div>
                                    <div class="col-50"><img src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_user.png" alt="user"></div>
                                </div>
                                <input type="text" name="name" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" required minlength="2" class="form-control" value="<?php echo $user['name'] ?>">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label>Email<span class="text-red">*</span></label></div>
                                    <div class="col-50"><img src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_mail.png" alt="mail"></div>
                                </div>
                                <input type="email" id="inputSignupEmail" name="email" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" class="form-control" value="<?php echo $user['email'] ?>">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-50"><label>Password<span class="text-red">*</span></label></div>
                                    <div class="col-50"><img src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_lock.png" alt="lock"></div>
                                </div>
                                <input type="password" onfocus="defaultToActive(event)" onblur="activeToDefault(event)" name="password" required minlength="6" class="form-control" value="<?php echo $user['password'] ?>">
                            </div>
                            <div class="text-center">
                                <button id="signUpBtnInForm" name="update" type="submit">Update!</button></div>
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
?>

<?php require_once(VIEW_ROOT . '/templates/footer.php');  ?>