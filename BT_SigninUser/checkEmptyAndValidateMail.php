<?php
$nameErr = NULL;
$emailErr = NULL;
$phoneErr = NULL;
$name = NULL;
$email = NULL;
$phone = NULL;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $has_error = false;
            if (empty($name)) {
                $nameErr = "Tên đăng nhập không được để trống!";
                $has_error = true;
            }
            if (empty($email)) {
                $emailErr = "Email không được để trống!";
                $has_error = true;
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
                    $has_error = true;
                }
            }
            if (empty($phone)) {
                $phoneErr = " Số điện thoại không được để trống!";
                $has_error = true;
            }
            if ($has_error === false) {
                saveDataJSON("data.json", $name, $email, $phone);
                $name = NULL;
                $email = NULL;
                $phone = NULL;
            }
        }
?>      