<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koneksi</title>
    
    <style>
        body {
            margin: 0;
            color: #6a6f8c;
            background: #c8c8c8;
            font: 600 16px/18px 'Open Sans', sans-serif;
        }
        *, *:after, *:before {
            box-sizing: border-box;
        }
        .clearfix:after, .clearfix:before {
            content: '';
            display: table;
        }
        .clearfix:after {
            clear: both;
            display: block;
        }
        a {
            color: inherit;
            text-decoration: none;
        }

        .login-wrap {
            width: 100%;
            margin: auto;
            margin-top: 30px;
            max-width: 525px;
            min-height: 570px;
            position: relative;
            background: url(http://codinginfinite.com/demo/images/bg.jpg) no-repeat center;
            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
        }
        .login-html {
            width: 100%;
            height: 100%;
            position: absolute;
            padding: 90px 70px 50px 70px;
            background: rgba(40, 57, 101, .9);
        }
        .login-html .sign-in-htm {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            transform: rotateY(0);
            backface-visibility: hidden;
            transition: all .4s linear;
        }
        .login-html .sign-in {
            display: none;
        }
        .login-html .tab {
            font-size: 22px;
            margin-right: 15px;
            padding-bottom: 5px;
            margin: 0 15px 10px 0;
            display: inline-block;
            border-bottom: 2px solid transparent;
        }
        .login-html .sign-in:checked + .tab {
            color: #fff;
            border-color: #1161ee;
        }
        .login-form {
            min-height: 345px;
            position: relative;
            perspective: 1000px;
            transform-style: preserve-3d;
        }
        .login-form .group {
            margin-bottom: 15px;
        }
        .login-form .group .label,
        .login-form .group .input,
        .login-form .group .button {
            width: 100%;
            display: block;
        }
        .login-form .group .input,
        .login-form .group .button {
            border: none;
            padding: 15px 20px;
            border-radius: 25px;
            background: rgba(255, 255, 255, .1);
        }
        .login-form .group input[data-type="password"] {
            text-security: circle;
            -webkit-text-security: circle;
        }
        .login-form .group .label {
            color: #aaa;
            font-size: 12px;
        }
        .login-form .group .button {
            background: #1161ee;
        }
        .login-html .tab {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-form .group input[type="checkbox"] {
            margin-right: 10px;
        }
        .login-form .group label {
            display: flex;
            align-items: center;
        }
        .hr {
            height: 2px;
            margin: 60px 0 50px 0;
            background: rgba(255, 255, 255, .2);
        }
        .foot-lnk {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
        <label for="tab-1" class="tab">Sign In</label>
        <div class="login-form">
            <form class="sign-in-htm" action="proses.php" method="POST"> 
                <div class="group">
                    <label for="username" class="label">Username</label>
                    <input id="username" name="username" type="text" class="input" required>
                </div>
                <div class="group">
                    <label for="password" class="label">Password</label>
                    <input id="password" name="password" type="password" class="input" data-type="password" required>
                </div>
                <div class="group">
                    <label for="check">
                        <input id="check" type="checkbox" class="check" checked>
                        Keep me Signed in
                    </label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
