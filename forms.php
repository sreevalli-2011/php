<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <!-- The code you provided is creating a form for user registration. -->
    <div class="container">
        <div class="header">
            <h2>Register Here</h2>
        </div>
        <form action="index.php" class="form" id="form">
            <div class="field">
                <label >Username</label>
                <input type="text" placeholder="xyz" id="uname">
                <span class="material-icons success"> check_circle</span>
                <span class="material-icons error ">error</span>
                <small>Error message</small>
            </div>
            <div class="field ">
                <label>Email</label>
                <input type="email" placeholder="abc@gmail.com" id="email">
                <span class="material-icons success "> check_circle</span>
                <span class="material-icons error">error</span>
                <small>Error message</small>
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" placeholder="password" id="password">
                <span class="material-icons success"> check_circle</span>
                <span class="material-icons error">error</span>
                <small>Error message</small>
            </div>
            <div class="field">
                <label>Confirm Password</label>
                <input type="password" placeholder="password" id="cpassword">
                <span class="material-icons success"> check_circle</span>
                <span class="material-icons error">error</span>
                <small>Error message</small>
            </div>
            <div class="field">
                <input type="checkbox" id="tc" class="terms" >
                <label>I agree to terms and conditions</label>               
                <small>Error message</small>
            </div>
            <input type="submit" class="button">
        </form>
    </div>
    <script src="validation.js"></script>
</body>
</html>