<?php
$arr = $_POST;
$returnArr = array();
$gender = 0;

for ($i = 0; $i < 10; $i++) {
    if ($i === 0) {
        if (isset($arr[$i]) && strlen($arr[$i]) < 3) {
            $returnArr[$i] = "First Name must be more than three characters";
        } else {
            $returnArr[$i] = "true";
        }
    }
    if ($i === 1) {
        if (isset($arr[$i]) && strlen($arr[$i]) < 3) {
            $returnArr[$i] = "Second Name must be more than three characters";
        } else {
            $returnArr[$i] = "true";
        }
    }
    if ($i === 2) {
        if (isset($arr[$i]) && !strpos($arr[$i], "@")) {
            $returnArr[$i] = "Email not valid";
        } else {
            $returnArr[$i] = "true";
        }
    }
    if ($i === 3) {
        if (isset($arr[$i]) && !$arr[$i]) {
            $returnArr[$i] = "Please enter a date";
        } else {
            $returnArr[$i] = "true";
        }
    }
    if ($i === 3) {
        if (isset($arr[$i]) && !$arr[$i]) {
            $returnArr[$i] = "Please Select your date of birth";
        } else {
            $returnArr[$i] = "true";
        }
    }
    if ($i === 4) {
        if (isset($arr[$i]) && !$arr[$i]) {
            $returnArr[$i] = "Please enter a colour";
        } else {
            $returnArr[$i] = "true";
        }
    }
    if ($i === 5 || $i === 6 || $i === 7) {
        if ($gender > 0) {
            return $returnArr[$i] = "Please choose only one gender";
        }
        if ($gender === 0 && $i === 7 && !$arr[$i]) {
            return $returnArr[$i] = "Please choose your gender";
        } else {
            $returnArr[$i] = "true";
        }
    }
    if ($i === 8) {
        if (isset($arr[$i]) && ($arr[$i] === "0")) {
            $returnArr[$i] = "Please select your department";
        } else {
            $returnArr[$i] = "true";
        }
    }
    if ($i === 9) {
        $match = "`!\"?$?%^&*()_-+={[}]:;@'~#|\<,>.?/";
        $error =   "Password must have at least 15 characters. It must contain uppercase letters, lowercase letters, a number and
        symbols such as ` ! \" ? $ ? % ^ & * ( ) _ - + = { [ } ] : ; @ ' ~ # | \ < , > . ? /";
        if (isset($arr[$i]) && $arr[$i]) {
            if (strlen($arr[$i]) < 15) {
                $returnArr[$i] = $error;
            } elseif (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $arr[$i])) {
                $returnArr[$i] = $error;
            } elseif (!strpbrk($match, $arr[$i])) {
                $returnArr[$i] = $error;
            } else {
                $returnArr[$i] =  "true";
            }
        } else {
            $returnArr[$i] = "Please enter a password";
        }
    }
}

$myJSON = json_encode($returnArr);
echo $myJSON;
