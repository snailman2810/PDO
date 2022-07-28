<?php
include ("model/m_user.php");
class c_user{
    public function register()
    {
        $time = getdate();
        $date = $time['year']."-".$time['mon']."-".$time['mday'];
        $id=null;
        $mail = $_POST['mail'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm']; 
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $created_at = $date;
        $updated_at = null;
        if(isset($_POST['register'])){
            if (preg_match("/^[a-zA-Z]{6,200}$/", $name) == 0) {
                $_SESSION['errors']['name'] = "Username length from 6 to 200 characters !";
            } else {
                $_SESSION['name'] = $name;
            }
            if (preg_match("/^[0-9]{10,20}$/i", $phone) == 0) {
                $_SESSION['errors']['phone'] = "Phone number length from 10 to 20 characters !";
            } else {
                $_SESSION['phone'] = $phone;
            }
            if (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{1,251})+$/", $mail) == 0) {
                $_SESSION['errors']['mail'] = "Mail is wrong format !";
            } else {
                $_SESSION['mail'] = $mail;
            }
            if (preg_match("/^[a-zA-Z0-9]{5,255}$/i", $address) == 0) {
                $_SESSION['errors']['address'] = "Address cannot be empty !";
            } else {
                $_SESSION['address'] = $address;
            }
            if (preg_match("/^[0-9]{6,100}$/", $password) == 0) {
                $_SESSION['errors']['password'] = "Password length from 6 to 100 characters !";
            } elseif ($password != $password_confirm) {
                $_SESSION['errors']['password_confirm'] = "Confirmation password is incorrect";
            }
            if (empty($_SESSION['errors'])) {
                $user = new m_user();
                $result = $user->insert_user($id,$mail,$name,$password,$phone,$address,$created_at,$updated_at);
                header("Location: login.php");
            }else{
                header("Location: register.php");
            }
            
        }
        
        include("view/v_register.php");

    }
    public function login(){
        if (isset($_POST["login"])) {
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $m_user = new m_user();
            $user = $m_user->select_login($mail,$password);
            if (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{1,251})+$/", $mail) == 0) {
                $_SESSION['errors']['mail'] = "Mail is wrong format !";
            } else {
                $_SESSION['mail'] = $mail;
            }
            if (preg_match("/^[0-9]{6,100}$/", $password) == 0) {
                $_SESSION['errors']['password'] = "Password length from 6 to 100 characters !";
            } else {
                $_SESSION['password'] = $password;
            }
            if (empty($user)) {
                $_SESSION['errors']['login'] = "Mail or password is incorrect!";
            }
            else {
                $_SESSION["user"] = $user;
                if (isset($remember) && !empty($remember)) {
                    $cookie_value = json_encode($users);
                    setcookie("user", $cookie_value, time() + 36000, "/");
                }
                header("Location: view/v_index.php");
            }
            if (!empty($_SESSION['errors'])) {
                header("Location: login.php");
            }
        }
        include("view/v_login.php");
    }
    public function logout(){
        session_start();
        session_destroy();
        setcookie("user", $cookie_value, time() - 36000, "/");
        header("Location: login.php");
    }
}

?>