<?php

require_once 'Controller.php';

class AuthController extends Controller {
    public function login() {
        $this->view('auth/login');
    }

       public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            // validation
            if (empty($username) || empty($email) || empty($password)) {
                $error = "All fields are required";
            } elseif ($password !== $confirmPassword) {
                $error = "Passwords don't match";
            } else {
                $userModel = new UserModel();
                if ($userModel->findByEmail($email)) {
                    $error = "Email already exists";
                } else {
                    if ($userModel->create($username, $email, $password)) {
                        $this->redirect('auth/login?registered=1');
                    } else {
                        $error = "Registration failed";
                    }
                }
            }
        }

        $this->view('auth/register', ['error' => $error ?? null]);
    }
}