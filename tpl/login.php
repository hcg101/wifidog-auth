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
    </style>
</head>
<body>
<form action="/login" method="post">
    <input type="hidden" name="redir" value="<?php echo $_GET['redir'] ?>">
    <h1><?php echo $_GET['mac'] ?></h1>
    <p>请复制上面的文字发送给下面的微信号</p>
    <p><button type="submit">我已发送</button></p>
    <p><img src="/qrcode.jpg" width="100%"></p>
</form>
</body>
</html>
