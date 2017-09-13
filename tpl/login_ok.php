<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="refresh" content="0;url=<?php echo $redir ?>">
    <title>WIFI Login Success</title>
    <style>
        body {
            text-align: center;
        }
    </style>
    <script>
        window.setTimeout(function () {
            window.location.replace('<?php echo $redir?>');
        }, 1000);
    </script>
</head>
<body>
<h1>跳转中...</h1><br>
<a href="<?php echo $redir ?>"><?php echo $redir ?></a>
</body>
</html>
