<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #fdf7f9;
            color: #39282e;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* LOGIN CONTAINER */

        .login-container {
            width: 100%;
            max-width: 430px;
            padding: 30px 20px;
        }

        /* BRAND */

        .brand {
            text-align: center;
            margin-bottom: 35px;
        }

        .brand-name {
            margin: 0;
            font-family: Georgia, serif;
            font-size: 32px;
            font-weight: normal;
            letter-spacing: 5px;
            color: #9e3f5f;
        }

        .brand-line {
            width: 45px;
            height: 2px;
            background: #d98ba4;
            margin: 13px auto;
        }

        .brand-subtitle {
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #a68791;
        }

        /* LOGIN CARD */

        .login-card {
            background: #ffffff;
            border: 1px solid #eadde2;
            box-shadow: 0 12px 35px rgba(116, 55, 76, 0.08);
            padding: 38px 40px 40px;
        }

        .login-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-title h1 {
            margin: 0;
            font-family: Georgia, serif;
            font-size: 28px;
            font-weight: normal;
            color: #3e2b32;
        }

        .login-title p {
            margin: 8px 0 0;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #a68791;
        }

        /* ERROR */

        .error {
            padding: 12px 14px;
            margin-bottom: 20px;
            background: #fdf0f3;
            border: 1px solid #e8c7d1;
            color: #9e3f5f;
            font-size: 12px;
            text-align: center;
        }

        /* FORM */

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #604951;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #dfcdd3;
            background: #fffafb;
            color: #39282e;
            font-family: Arial, sans-serif;
            font-size: 13px;
            outline: none;
            transition: 0.2s;
        }

        .form-group input:focus {
            border-color: #d98ba4;
            background: #ffffff;
        }

        .form-group input::placeholder {
            color: #b9a2aa;
        }

        /* LOGIN BUTTON */

        .login-button {
            width: 100%;
            margin-top: 8px;
            padding: 14px;
            border: none;
            background: #ad486b;
            color: #ffffff;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: 0.2s;
        }

        .login-button:hover {
            background: #8f3857;
        }

        /* FOOTER */

        .footer {
            text-align: center;
            margin-top: 28px;
            font-family: Georgia, serif;
            font-size: 11px;
            color: #b28c98;
            letter-spacing: 2px;
        }

        /* MOBILE */

        @media (max-width: 500px) {

            .login-container {
                padding: 25px 18px;
            }

            .brand-name {
                font-size: 27px;
                letter-spacing: 4px;
            }

            .login-card {
                padding: 32px 25px;
            }

        }

    </style>

</head>

<body>

    <div class="login-container">

        <div class="brand">

            <h2 class="brand-name">
                REVERIE COSMETICS
            </h2>

            <div class="brand-line"></div>

            <div class="brand-subtitle">
                Beauty
            </div>

        </div>


        <div class="login-card">

            <div class="login-title">

                <h1>
                    Admin Login
                </h1>

                <p>
                    Product Management
                </p>

            </div>


            <?php if (isset($error)): ?>

                <div class="error">
                    <?php echo html_escape($error); ?>
                </div>

            <?php endif; ?>


            <form action="<?php echo site_url('login'); ?>" method="POST">

                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>


                <button type="submit" class="login-button">
                    Login
                </button>

            </form>

        </div>


        <div class="footer">
            REVERIE COSMETICS
        </div>

    </div>

</body>

</html>