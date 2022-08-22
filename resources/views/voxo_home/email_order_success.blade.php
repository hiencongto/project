<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themes.pixelstrap.com/voxo/email-template/order-success-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:02:54 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

{{--    <link rel="icon" href="{{asset('voxo_front/images/favicon.png')}}" type="image/x-icon">--}}

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

        p {
            margin: 8px 0;
        }

        h5 {
            color: #777777;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #3d3d3d;
            color: #fff;
        }

        .title {
            color: #222222;
            font-size: 22px;
            font-weight: bold;
            margin: 10px 0;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td {
            width: 30px;
            height: 30px;
            background: transparent;
            margin: 0 30px;
            border-radius: 50%;
            text-align: center;
        }

        .footer-social-icon tr td a {
            width: 100%;
            align-items: center;
            display: flex;
            justify-content: center;
            color: #fff;
        }

        .footer-social-icon tr td a i {
            width: 50%;
            margin: 0;
        }

        .footer-subscript p {
            margin: 0;
            letter-spacing: 1.1px;
            line-height: 1.6;
            font-size: 14px;
            color: #c5c5c5;
        }

        .footer-subscript p a {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>

<body style="margin: 20px auto;" data-new-gr-c-s-check-loaded="14.1031.0" data-gr-ext-installed="">
<table align="center" border="0" cellpadding="0" cellspacing="0"
       style="padding: 0 30px;background-color: #fff; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
    <tbody>
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>
{{--                        <img src="{{asset('voxo_front/images/order-image.jpg')}}" alt="" style="margin-bottom: 10px;width: 50%;">--}}
                    </td>
                </tr>

                <tr>
                    <td>
                        <h2 class="title">thank you</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color: #777777;">Your Order Is On The Way</p>
                        <p style="color: #777777; letter-spacing: 0.5px;">Transaction ID:{{$orderId}}
                        </p>
                    </td>
                </tr>
                <tr>

                    <td>
                        <div style="border-top: 1px solid #ddd;height:1px;margin-top: 30px;">
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>
                        <h2 class="title">YOUR ORDER DETAILS</h2>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="order-detail" style="margin-top: 10px;" border="0" cellpadding="0" cellspacing="0" align="left">
                <tbody>
                <tr align="left">
                    <th>Product</th>
                    <th style="padding-left: 15px;">Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                @foreach($carts as $cart)
                    @foreach($products as $product)
                        @if($cart['product_id'] == $product->id)
                <tr>
                    <td style="width: 0;padding:5px">
                        <h4>{{$product->name}}</h4>
                    </td>
                    <td valign="top" style="padding: 0 15px;">
                        <h5 style="margin-top: 15px;">{{$product->description}}</h5>
                    </td>
                    <td valign="top" style="padding: 0 15px;">
{{--                        <h5 style="font-size: 14px; color:#444;margin-top:15px;margin-bottom: 0px;">Size--}}
{{--                            : <span> L</span>--}}
{{--                        </h5>--}}
                        <h5 style="font-size: 14px; color:#444;margin-top: 10px; margin-bottom: 0;">QTY :
                            <span>{{$cart['product_quantity']}}</span>
                        </h5>
                    </td>
                    <td valign="top" style="padding: 0 15px;">
                        <h5 style="font-size: 14px; color:#444;margin-top:15px;"><b>${{number_format($product->price)}}</b></h5>
                    </td>
                </tr>
                        @endif
                    @endforeach
                @endforeach
                <tr>
                    <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;
                                    padding-left: 20px;text-align:left;border-right: unset;">TOTAL PAID :</td>
                    <td colspan="3" class="price"
                        style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;">
                        <b>${{number_format($data['amount'])}}</b>
                    </td>
                </tr>
                </tbody>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" align="left"
                   style="width: 100%;margin-top: 40px;    margin-bottom: 30px;">
                <tbody>
                <tr>
                    <td
                        style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 50%;">
                        <h5
                            style="font-size: 16px; font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                            DILIVERY ADDRESS</h5>
                        <p
                            style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                            {{$data['name']}},<br>
                            {{$data['phone']}},<br>
                            {{$data['address']}}.</p>
                    </td>
{{--                    <td width="57" height="25" class="user-info"><img src="{{asset('voxo_front/images/space.jpg')}}" alt=" " height="25" width="57"></td>--}}
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<table class="main-bg-light text-center" style="margin-top: 0;" align="center" border="0" cellpadding="0"
       cellspacing="0" width="100%">
    <tr>
        <td style="padding: 30px;">
            <div>
                <h4 class="title" style="margin:0;text-align: center; color: whitesmoke;">Follow us
                </h4>
            </div>
            <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon text-center" align="center"
                   style="margin-top:12px;">
                <tr>
                    <td>
                        <a href="javascript:void(0)">
                            <img src="{{asset('voxo_front/images/fb.png')}}" alt=""
                                 style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);">
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)">
                            <img src="{{asset('voxo_front/images/twitter.png')}}" alt=""
                                 style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);">
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)">
                            <img src="{{asset('voxo_front/images/insta.png')}}" alt=""
                                 style="font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);">
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)">
                            <img src="{{asset('voxo_front/images/google-plus.png')}}" alt=""
                                 style="font-size: 25px; width: 22px;filter: invert(1);">
                        </a>
                    </td>
                </tr>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0;"
                   class="footer-subscript">
                <tr>
                    <td>
                        <p>Ths email template was sent to you
                            becouse we want to make the world a better place. you could change your
                            <a href="#">subscription settings</a> anytime.
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

<!-- Mirrored from themes.pixelstrap.com/voxo/email-template/order-success-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:02:56 GMT -->
</html>
