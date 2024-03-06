<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flower_L</title>
    <link rel="stylesheet" href="{{ url('css/stylelg.css') }}">
</head>
<body>
    <div class="bg">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-button" onclick="login()">Login</button>
                <button  type="button" class="toggle-button" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <form id="register" class="input-group-register">
                <input type="text" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="email" class="input-field" placeholder="Email" required>
                <input type="text" class="input-field" placeholder="Name" required>
                <input type="text" class="input-field" placeholder="Address" required>
                <input type="text" class="input-field" placeholder="Phone" required>
                <button type="submit" class="submit-btn-register">Register</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>