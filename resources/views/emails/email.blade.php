{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>MUC Business</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Name: {{ $details['name'] }}</h2>--}}
{{--<h2>Email: {{ $details['email'] }}</h2>--}}
{{--<h2>Message</h2>--}}
{{--<p>{{ $details['message'] }}</p>--}}

{{--<p>Thank you</p>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
    <style>
        #header {
            background: #000;
        }
    </style>
</head>
<body style="padding: 0; margin: 0; background: #EEEEEE;">
<table border="0" style="border-collapse: collapse; width: 100%;">
    <tr id="header" >
        <td colspan="3" style="padding: 5%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="84.729" height="24" viewBox="0 0 84.729 24"><defs><style>.a{fill:#fff;fill-rule:evenodd;}.b{fill:#e50019;}</style></defs><g transform="translate(-833 -504)"><path class="a" d="M833,562.977h84.729v4.282H833v-4.282Z" transform="translate(0 -39.26)"/><path class="b" d="M851.885,523.717H845.1L839.93,515.3v8.416H833v-12.58H845.67l2.974,4.729,2.706-4.729h12.312V528H856.7V515.6l-4.818,8.119ZM833,504h8.208l3.39,5.442H833V504Zm30.661,0v5.442H852.332L855.484,504Zm19.718,13.71v-6.572H890.7v6.275a6.882,6.882,0,0,1-.372,2.186,6.808,6.808,0,0,1-1.07,2.022,6.086,6.086,0,0,1-1.68,1.5,4.163,4.163,0,0,1-2.2.594H871.217a4.165,4.165,0,0,1-2.2-.594,6.088,6.088,0,0,1-1.68-1.5,7.1,7.1,0,0,1-1.086-2.022,6.655,6.655,0,0,1-.386-2.186v-6.275h7.345v6.572a1.177,1.177,0,0,0,.06.4q.059.164.475.164h9.1q.416,0,.475-.164a1.177,1.177,0,0,0,.06-.4Zm-17.517-8.267V504h7.345v5.442Zm17.517,0V504H890.7v5.442Zm14.87,14.275a4.163,4.163,0,0,1-2.2-.594,6.088,6.088,0,0,1-1.68-1.5,7.087,7.087,0,0,1-1.086-2.022,6.656,6.656,0,0,1-.386-2.186v-6.275h7.346v6.215c.039.317.07.551.089.7s.169.223.446.223H917.73v5.442ZM917.73,504v5.442H892.956a7.75,7.75,0,0,1,.58-1.963,6.486,6.486,0,0,1,1.13-1.755,5.772,5.772,0,0,1,1.606-1.249A4.2,4.2,0,0,1,898.25,504Z" transform="translate(-0.001)"/></g></svg>
        </td>
    </tr>

    <tr id="spacer"><td colspan="1">&nbsp;</td></tr>

    <tr id="body">
        <td style="width: 10%;"></td>
        <td style="width: 80%; background: #FFFFFF; padding: 1%">
            <h1 style="font-family: 'Montserrat', sans-serif;margin: 0; color: #2D2D2D;">Contact Form Message</h1>
            <table style="font-family: 'Arial', sans-serif; color: #2D2D2D; margin: auto; width: 100%;">
                <tr>
                    <td style="font-weight: 700; padding: 2% 0;">Email address </td>
                    <td style="text-align: right; padding: 2% 0;">{{ $details['email'] }}</td>
                </tr>
                <tr>
                    <td style="font-weight: 700; padding: 2% 0;">Name</td>
                    <td style="text-align: right; padding: 2% 0;">{{ $details['name'] }}</td>
                </tr>
                <tr>
                    <td colspan="3" style="font-weight: 700; padding: 2% 0;">Message</td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left; padding: 2% 0;">{{ $details['message'] }}</td>
                </tr>
            </table>
            <hr />
            <p style="font-family: 'Arial', sans-serif;">To respond, simply reply to this message.</p>
        </td>
        <td style="width: 10%;"></td>
    </tr>

    <tr id="spacer"><td colspan="1">&nbsp;</td></tr>

    <tr id="footer" style="font-family: 'Arial', sans-serif; text-align: center;">
        <td colspan="3">This email was automatically sent via a contact form on the MUC</td>
    </tr>
</table>
</body>
</html>