<?php
class Auth {
    public static function attempt($email, $password) {
        $userModel = new UserModel();
        $user = $userModel->findByEmail($email);
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            return true;
        }
        
        return false;
    }

    public static function check() {
        return isset($_SESSION['user_id']);
    }

    public static function logout() {
        session_destroy();
    }
}