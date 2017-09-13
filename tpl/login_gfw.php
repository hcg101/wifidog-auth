<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>WIFI Login</title>
    <style>
        body {
            text-align: center;
        }
        h1, p {
            margin: 5px;
            padding: 0;
        }
    </style>
</head>
<body>
<form action="/login" method="post">
    <input type="hidden" name="redir" value="<?php echo $_GET['redir'] ?>">
    <h1>自动翻墙WIFI</h1>
    <p><button type="submit" style="width: 80%; height: 50px; font-size: larger; font-weight: bold">立即翻墙</button></p>
    <p><img src="/qrcode.jpg" width="100%"></p>
    <p>有任何问题，请联系微信</p>
</form>
</body>
</html>
