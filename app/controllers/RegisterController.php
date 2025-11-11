<?php

require_once __DIR__ . "/../models/User.php";

class RegisterController {

    public function registerForm() {
        require_once __DIR__ . "/../views/pages/register.php";
    }

    public function registerUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = new User();

            $saved = $user->create([
                "firstName" => $_POST['firstName'],
                "lastName" => $_POST['lastName'],
                "email" => $_POST['email'],
                "password" => $_POST['password'],
            ]);

            if ($saved) {
                header("Location: /success");
            }
        }
    }
}