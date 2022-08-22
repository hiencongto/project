<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/voxo/email-template/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:00:32 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <title>Voxo | Email template </title>

    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">



    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Rubik', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        h5 {
            margin: 10px;
            color: #777;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        h4.title {
            color: white;
            font-weight: bold;
            padding-bottom: 0;
            text-transform: capitalize;
            display: inline-block;
            letter-spacing: 1.5px;
            position: relative;
            padding-bottom: 5px;
            border-bottom: 2px solid white;
        }

        .header .header-logo a {
            display: block;
            margin: 0;
            padding: 20px;
            text-align: left;
        }

        .header .header-contain h5 {
            margin: 0;
            font-size: 20px;
            letter-spacing: 4px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .header .header-contain h2 {
            margin: 40px 0 0;
            font-size: 28px;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
            padding-bottom: 18px;
        }

        .header .header-contain h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #212529;
        }

        .header .header-contain .market {
            margin: 25px auto 0;
            letter-spacing: 0;
            font-weight: normal;
            text-transform: none;
            display: block;
            width: 80%;
            color: #7e7e7e;
        }

        .title-2 h2 {
            margin: 0;
            font-size: 26px;
            letter-spacing: 1px;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 1;
        }

        .title-2 h6 {
            font-size: 18px;
            font-weight: normal;
            margin: 0;
        }

        .title-2 button {
            color: white;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin-top: 25px;
            border-radius: 8px;
            padding: 18px 30px;
            border: 1px solid #e22454;
            background-color: #e22454;
            font-size: 14px;
        }

        .header .header-contain button {
            text-transform: uppercase;
            margin: 25px 0;
            border-radius: 5px;
            padding: 15px 35px;
            background-color: #e22454;
            color: white;
            border: none;
        }

        .contact-table {
            width: 100%;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-table td {
            margin-top: 17px;
            position: relative;
            font-size: 13px;
            text-transform: uppercase;
            color: #ddd;
            letter-spacing: 1.1px;
        }

        .contact-table td:after {
            content: '';
            position: absolute;
            top: 50%;
            left: -10px;
            border-radius: 50%;
            background-color: white;
            width: 3px;
            height: 3px;
            transform: translateY(-50%);
        }

        .contact-table td:first-child:after {
            content: unset;
        }
    </style>
</head>

<body style="margin: 20px auto;">
<table align="center" border="0" cellpadding="0" cellspacing="0"
       style="background-color: white; width: 100%; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
    <tbody>
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr class="header">
                    <td align="left" class="header-logo"
                        style="text-align: center; display: block; margin-bottom: 20px;" valign="top">
                        <a href="https://themes.pixelstrap.com/voxo/front-end/html/index.html">
{{--                            <img src="images/logo.png" class="main-logo" alt="logo">--}}
                        </a>
                    </td>
                    <td class="header-contain" style="display: block;">
                        <ul>
                            <li style="display: block;text-decoration: unset;">
{{--                                <img src="images/reset.jpg" alt="">--}}
                            </li>

                            <li style="display: block;text-decoration: unset" class="reset-contain">
                                <h2>reset your password</h2>
                                <h4 class="market"></h4>
                                <button><a href="{{route('checkMailReset', ['token' => $token, 'email' => $emailUser])}}" style="color: white">Reset Password</a></button>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>

{{--            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <div class="title title-2 text-center">--}}
{{--                        <h6>your email :- <a href="#"--}}
{{--                                             style="font-weight: 600; text-decoration: underline;">imthebest@example.com</a>--}}
{{--                        </h6>--}}
{{--                        <p style="margin-bottom: 0;">If this was a mistake, just ignore this email and--}}
{{--                            nothing will happen.</p>--}}
{{--                    </div>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--            </table>--}}

            <table class="text-center" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                   style="margin-top:40px; background-color: #212529; color: white; padding: 40px 0;">
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon"
                               align="center" class="text-center" style="margin: 8px auto 20px;">
                            <tr>
                                <td>
                                    <a href="javascript:void(0)">
                                        <img src="images/fb.png" alt=""
                                             style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);">
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">
                                        <img src="images/twitter.png" alt=""
                                             style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);">
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">
                                        <img src="images/insta.png" alt=""
                                             style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);">
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">
                                        <img src="images/google-plus.png" alt=""
                                             style="font-size: 25px; width: 22px;filter: invert(1);">
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td>
                                    <h5
                                        style="font-size: 13px; text-transform: uppercase; margin: 0; color:#ddd; letter-spacing:1px;">
                                        This email was created using the <span
                                            style="color: #e22454;">VOXO</span>.</h5>
                                    <h5
                                        style="font-size: 13px; text-transform: uppercase; margin: 10px 0 0; color:#ddd; letter-spacing:1px;">
                                        Made with <i class="fas fa-heart"
                                                     style="color: #e22454; margin: 0 5px;"></i> by design
                                        voxo team.</h5>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 100%">
                                    <table class="contact-table">
                                        <tbody style="display: block; width: 100%;">
                                        <tr
                                            style="display: block; width: 100%;display: flex; align-items: center; justify-content: center;">
                                            <td><a href="#"
                                                   style="color: #777; font-weight: 600; text-decoration: underline;">Unsubscribe</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>


<!-- Mirrored from themes.pixelstrap.com/voxo/email-template/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:00:34 GMT -->
</html>
