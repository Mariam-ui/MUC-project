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