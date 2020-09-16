<?php


class AttributeManagmentController
{

    public function actionIndex()
    {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);
        $userAttributes = Attribute::getAttributeByUserId($userId);

        $allAttributes = Attribute::getAllSttributes();

        $attrName = '';
        $attrValue = '';
        // $name = '';
        // $email = '';
        // $password = '';

        if (isset($_POST['addAttribute'])) {
            $attrName = ucfirst($_POST['attrName']);
            $attrValue = ucfirst($_POST['attrValue']);

            $result = false;

            $errors = false;
            $errorMessage = null;

            if (!Attribute::checkAttrName($attrName)) {
                $errors[] = 'ATRRIBUTE NAME is shorter than 2 symbols !';
            }

            if (!Attribute::checkValue($attrValue)) {
                $errors[] = 'ATRRIBUTE VALUE is shorter than 2 symbols !';
            }

            if ($errors == false) {
                if (Attribute::checkAttributeExists($attrName, $userId)) {
                    $result = Attribute::updateAttributeValue($userId, $attrName, $attrValue);
                    header("Location: cabinet/");
                } else {
                    $result = Attribute::createAttribute($userId, $attrName, $attrValue);
                    header("Location: cabinet/");
                }
            } else {
                $errorMessage = implode('\n\n', $errors);
            }
        }

        if (isset($_POST['update'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $result = false;

            $errors = false;
            $errorMessage = null;
            if (!User::checkName($name)) {
                $errors[] = 'NAME is shorter than 2 symbols !';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'EMAIL is incorrect !';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'PASSWORD is shorter than 6 symbols !';
            }

            if (User::compareEmail($userId, $email)) {
                $errors[] = 'EMAIL: `' . $email . '` is already used!';
            }

            if ($errors == false) {
                $result = User::update($userId, $name, $email, $password);
                header("Location: cabinet/");
            } else {
                $errorMessage = implode('\n\n', $errors);
            }
        }

        require_once('./views/attributeManagment.php');
        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION['user']);
        header('Location:' . HOME_ROOT);
    }
}
