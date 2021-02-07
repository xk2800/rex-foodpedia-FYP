<!doctype html>
<?php

    include "../db-connect.php";
    session_start();
    ob_start();

?>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
    <body>
            <div style="margin:0px auto;max-width:600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                    <tbody>
                        <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="margin:0 auto;max-width:600px;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                    <tr style="vertical-align:top;">
                        <td background="https://www.htmlcsscolor.com/preview/gallery/15243C.png" style="background:#888888 url(https://www.htmlcsscolor.com/preview/gallery/15243C.png) no-repeat center center / cover;background-position:center center;background-repeat:no-repeat;padding:15px 0px;vertical-align:top;">
                            <div class="mj-hero-content" style="margin:0px auto;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;margin:0px;">
                                    <tr>
                                        <td>
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;margin:0px;">
                                                <tr>
                                                    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                        <div style="font-family:'Verdana', Geneva, sans-serif;font-size:30px;font-weight:bold;line-height:20px;text-align:center;color:white;">
                                                            <p>Email Verification</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="border" style="border-bottom: 1px solid #e2e2e2; border-left: 1px solid #e2e2e2; border-right: 1px solid #e2e2e2; margin: 0px auto; max-width: 600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                    <tbody>
                        <tr>
                            <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;">
                                <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
                                        <tbody>
                                            <tr>
                                                <td style="direction:ltr;font-size:0px;padding:5px 0;text-align:center;">
                                                    <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                                            <tr>
                                                                <td align="left" style="font-size:0px;padding:5px 25px;word-break:break-word;">
                                                                    <div style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:24px;text-align:center;color:#637381;">
                                                                        <p>Click <a class='link' style='color: black; text-decoration: underline;' href='$url'> here</a> to verify your email or press the button below.</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" vertical-align="middle" style="font-size:0px;padding:5px 25px;word-break:break-word;">
                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:200px;line-height:100%;">
                                                                        <tr>
                                                                            <td align="center" bgcolor="#5e6ebf" role="presentation" style="border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background:#5e6ebf;" valign="middle">
                                                                                <a href='$url' style="display:inline-block;width:200px;font-size:50px;background:#4368a3;color:#ffffff;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:20px;font-weight:bold;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:20px;mso-padding-alt:0px;border-radius:3px;" target="_blank">
                                                                                    Verify Account
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <td align="left" style="font-size:0px;padding:5px 25px;word-break:break-word;">
                                                                    <div style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:24px;text-align:center;color:#637381;">
                                                                        <p>Link didn't work? Copy the link below into your web browser:</h5><p style='color:red; font-weight:bold;'><?php
                                                                        $email="xavierkhew00@gmail.com";
                                                                        $result = mysqli_query($connect, "SELECT * from address WHERE label='Home' AND email='$email'");
                                                                        $row = mysqli_fetch_assoc($result);

                                                                        $results = mysqli_query($connect, "SELECT * from address WHERE label='Office' AND email='$email'");
                                                                        $rows = mysqli_fetch_assoc($results);

                                                                        if($row){
                                                                            echo $row["user_address"];
                                                                            echo "test works";
                                                                            
                                                                                    }else{
                                                                            ?>
                                                                                                    <p><span id="error">No Home Address Found</span></p>
                                                                            <?php
                                                                                                }
                                                                        
                                                                        ?></p></p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                <tbody>
                    <tr>
                        <td>
                            <div style="margin:0px auto;max-width:600px;">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td style="direction:ltr;font-size:0px;padding:0px 0;text-align:center;">
                                                <div style="margin:0px auto;max-width:600px;">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                                                                    <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="vertical-align:top;padding:0;">
                                                                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                                                            <tr>
                                                                                                <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td>
                                                                                                                    <div>
                                                                                                                        <img src="https://techcareerdays.com/images/logo/LOGO%20standard.png" style="height:25px; width:auto;padding-right:10px">
                                                                                                                        <img src="https://itsociety.rocks/logo-small.png" style="height:25px; width:auto;">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                                                    <div style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:11px;font-weight:400;line-height:16px;text-align:center;color:#445566;">
                                                                                                        Tech Career Days 2021, presented by IT Society MMU Cyberjaya                        
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>