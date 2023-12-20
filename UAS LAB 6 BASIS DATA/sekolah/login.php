<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    a {
        text-decoration: none;
    }

    html {
        height: 100%;
    }

    body {
        background: -webkit-linear-gradient(bottom, #7b8ef7, #fbfbfb);
        background-repeat: no-repeat;

    }

    label {
        color: white;
        font-family: "Candara", sans-serif;
        font-size: 11pt;
    }

    #forgot-pass {
        color: white;
        font-family: "Candara", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    #card {
        background: #000;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, .65);
        height: 410px;
        margin: 6rem auto 9.1rem auto;
        width: 329px;
    }

    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        color: white;
        font-family:"Candara", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }

    #signup {
        color: white;
        font-family: "Candara", sans-serif;
        font-size: 10pt;
        margin-top: 16px;
        text-align: center;
    }

    #submit-btn {
        background: #fbfbfb;
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px #000;
        cursor: pointer;
        color: black;
        font-family: "Candara", sans-serif;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 50px;
        transition: .25s;
        width: 153px;
    }

    #submit-btn:hover {
        box-shadow: 0px 1px 18px #000;
    }

    .form {
        display: flex;
        align-items: left;
        flex-direction: column;
    }

    .form-border {
        background: #000;
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #fbfbfb, #000);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }
    </style>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN HERE</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="ceklogin.php">
                <label for="user-username" style="padding-top: 13px;">
                    &nbsp;Username
                </label>
                <input id="user-username" class="form-content" type="username" name="username" autocomplete="on"
                    required>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 22px;">
                    &nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required>
                <div class="form-border"></div>

                <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN">
                <a href="#" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>

</html>