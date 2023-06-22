<!DOCTYPE html>
<html>

<head>
    <title>Student Sign-Up</title>
    <link rel="stylesheet" href="csss/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" </head>

<body>

    <h2>Student Sign-Up</h2>
    <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <!-- <li><a href="index.php">HOME</a></li> -->
                <!-- <li><a href="studentlogin.php">Student Login</a></li> -->
                <li><a href="admin/aboutus.php">ABOUT</a></li>
                <li><a href="admin/contactus.php">CONTACT</a></li>
                <li><a href="login.php">ADMIN LOGIN</a></li>
                <!-- <li><a href="signup.php">Sign Up</a></li> -->

            </ul>
        </div>
    </nav>

    <div class="main-content-header">
        <form method="POST" action="process.php">
            <th id="change"><label for="student_id">Student ID:</label></th>
            <td class="table"><input type="text" id="student_id" name="student_id" required></td><br><br>

            <label for="password">Password:</label>
            <td class="table"><input type="password" id="password" name="password" required></td><br><br>

            <input type="submit" value="Sign Up">
        </form>
    </div>

</body>