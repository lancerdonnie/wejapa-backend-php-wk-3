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
    <title>Wejapa SignUp</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center mb-3 text-success font-weight-bold">Fill in your information to sign up</h3>
        <div class="col">
            <form>
                <div class="col-md-5 mb-3">
                    <label class="label" for="firstname">First Name</label>
                    <input name="firstname" type="text" value="" />
                    <div class="invalid">
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label class="label" for="secondname">Second Name</label>
                    <input name="secondname" type="text" value="" />
                    <div class="invalid">
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label class="label" for="email">Email</label>
                    <input name="email" type="text" value="" />
                    <div class="invalid">
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label class="label" for="date">Date of Birth</label>
                    <input name="date" type="date" value="" />
                    <div class="invalid">
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label class="label" for="color">Favourite Colour</label>
                    <input name="color" type="text" value="" />
                    <div class="invalid"></div>
                </div>
                <div class="col-md-5 mb-3">
                    <label class="label" for="gender">Gender</label>
                    <span>Male</span>
                    <input name="gender1" type="checkbox" value="Male" />
                    <span>Female</span>
                    <input name="gender2" type="checkbox" value="Female" />
                    <span>Other</span>
                    <input name="gender3" type="checkbox" value="Other" />
                    <div class="invalid"></div>
                </div>
                <div class="col-md-5 mb-3">
                    <label class="label" for="department">Department</label>
                    <select name="department" value='0'>
                        <option value="0">Select</option>
                        <option value="1">Information Technology</option>
                        <option value="2">Human Resources</option>
                        <option value="3">Finance</option>
                        <option value="4">Public Relations</option>
                    </select>
                    <div class="invalid"></div>
                </div>
                <div class="col-md-5 mb-3">
                    <label class="label" for="password">Password</label>
                    <input name="password" type="password" value="" />
                    <div class="invalid"></div>
                </div>
                <div class="col-md-5 mb-3">
                    <button type="submit" class="btn btn-success">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./index.js">
    </script>
</body>

</html>