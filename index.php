<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">
  <title>Wejapa Contact</title>
</head>

<?php
session_start();
$valid = 0;
?>

<body>
  <div class="container">
    <h3 class="text-center mb-3 text-success font-weight-bold">Fill in your information</h3>
    <div class="col">
      <form action="" method="post">
        <div class="col-md-5 mb-3">
          <label class="label" for="firstname">First Name</label>
          <input name="firstname" type="text" value="<?php echo isset($_REQUEST['firstname']) ? $_REQUEST['firstname'] : '' ?>" />
          <?php
          if (isset($_REQUEST["firstname"]) && strlen($_REQUEST["firstname"]) < 3) echo '<div class="invalid">
         First Name must be more than three characters
        </div>';
          else $valid++;
          ?>
        </div>
        <div class="col-md-5 mb-3">
          <label class="label" for="secondname">Second Name</label>
          <input name="secondname" type="text" value="<?php echo isset($_REQUEST['secondname']) ? $_REQUEST['secondname'] : '' ?>" />
          <?php
          if (isset($_REQUEST["secondname"]) && strlen($_REQUEST["secondname"]) < 3) echo '<div class="invalid">
         Second Name must be more than three characters
        </div>';
          else $valid++;
          ?>
        </div>
        <div class="col-md-5 mb-3">
          <label class="label" for="email">Email</label>
          <input name="email" type="text" value="<?php echo isset($_REQUEST['email']) ? $_REQUEST['email'] : '' ?>" />
          <?php
          if (isset($_REQUEST["email"]) && !strpos($_REQUEST["email"], "@")) echo '<div class="invalid">
         Email not valid
        </div>';
          else $valid++;
          ?>
        </div>
        <div class="col-md-5 mb-3">
          <label class="label" for="date">Date of Birth</label>
          <input name="date" type="date" value="<?php echo isset($_REQUEST['date']) ? $_REQUEST['date'] : '' ?>" />
          <?php
          if (isset($_REQUEST["date"]) && !$_REQUEST["date"]) echo '<div class="invalid">
         Please enter a date
        </div>';
          else $valid++;
          ?>
        </div>
        <div class="col-md-5 mb-3">
          <label class="label" for="color">Favourite Colour</label>
          <input name="color" type="text" value="<?php echo isset($_REQUEST['color']) ? $_REQUEST['color'] : '' ?>" />
          <?php
          if (isset($_REQUEST["color"]) && !$_REQUEST["color"]) echo '<div class="invalid">
         Please enter a colour
        </div>';
          else $valid++;
          ?>
        </div>
        <div class="col-md-5 mb-3">
          <label class="label" for="gender">Gender</label>
          <span>Male</span>
          <input name="gender1" type="checkbox" value="1" <?php echo isset($_REQUEST['gender1']) && $_REQUEST["gender1"] === "1" ? "checked" : '' ?> />
          <span>Female</span>
          <input name="gender2" type="checkbox" value="2" <?php echo isset($_REQUEST['gender2']) && $_REQUEST["gender2"] === "2" ? "checked" : '' ?> />
          <span>Other</span>
          <input name="gender3" type="checkbox" value="3" <?php echo isset($_REQUEST['gender3']) && $_REQUEST["gender3"] === "3" ? "checked" : '' ?> />
          <?php
          $gen1 = $_REQUEST["gender1"] ?? null;
          $gen2 = $_REQUEST["gender2"] ?? null;
          $gen3 = $_REQUEST["gender3"] ?? null;
          $temp = 0;
          $arr = array($gen1, $gen2, $gen3);
          if (isset($gen1) || isset($gen2) || isset($gen3)) {
            if (!$gen1 && !$gen2 && !$gen3) {
              echo '<div class="invalid">
            Please choose a gender
           </div>';
              return;
            }
            for ($i = 0; $i < count(($arr)); $i++) {
              if (isset($arr[$i])) $temp++;
            }
            if ($temp > 1) {
              echo '<div class="invalid">
            Please choose only one gender
           </div>';
            } elseif ($temp === 1) {
              $valid++;
            } else {
              echo '<div class="invalid">
            Please choose your gender
           </div>';
            }
          }
          ?>
        </div>
        <div class="col-md-5 mb-3">
          <label class="label" for="department">Department</label>
          <select name="department" value="<?php echo isset($_REQUEST['department']) ? $_REQUEST['department'] : '0' ?>">
            <option <?php echo isset($_REQUEST['department']) && $_REQUEST['department'] === "0" ? "selected" : "" ?> value="0">Select</option>
            <option <?php echo isset($_REQUEST['department']) && $_REQUEST['department'] === "1" ? "selected" : "" ?> value="1">Information Technology</option>
            <option <?php echo isset($_REQUEST['department']) && $_REQUEST['department'] === "2" ? "selected" : "" ?> value="2">Human Resources</option>
            <option <?php echo isset($_REQUEST['department']) && $_REQUEST['department'] === "3" ? "selected" : "" ?> value="3">Finance</option>
            <option <?php echo isset($_REQUEST['department']) && $_REQUEST['department'] === "4" ? "selected" : "" ?> value="4">Public Relations</option>
          </select>
          <?php
          if (isset($_REQUEST["department"]) && $_REQUEST["department"] === "0") echo '<div class="invalid">
         Please select your department
        </div>';
          else $valid++;
          ?>
        </div>
        <div class="col-md-5 mb-3">
          <label class="label" for="password">Password</label>
          <input name="password" type="password" value="<?php echo isset($_REQUEST['password']) ? $_REQUEST['password'] : '' ?>" />
          <?php
          function isValidPasword($password)
          {
            $match = "`!\"?$?%^&*()_-+={[}]:;@'~#|\<,>.?/";
            if (strlen($password) < 15) {
              return false;
            } elseif (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $password)) {
              return false;
            } elseif (!strpbrk($match, $password)) {
              return false;
            } else {
              return true;
            }
          }
          if (isset($_REQUEST["password"])) {
            if (!isValidPasword($_REQUEST["password"])) {
              echo "<div class='invalid'>
              Password must have at least 15 characters. It must contain uppercase letters, lowercase letters, a number and
              symbols such as ` ! \" ? $ ? % ^ & * ( ) _ - + = { [ } ] : ; @ ' ~ # | \ < , > . ? /
             </div>";
            } else $valid++;
          }
          ?>
        </div>
        <div class="col-md-5 mb-3">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
        <?php
        if ($valid === 8) {
          $_SESSION['color'] = $_REQUEST['color'];
          header("Location: successful.php");
        }
        ?>
      </form>
    </div>
  </div>
</body>

</html>