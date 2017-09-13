<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="refresh" content="0;url=<?php echo $redir ?>">
    <title>WIFI Login Success</title>
    <script>
        window.setTimeout(function () {
            window.location.replace('<?php echo $redir?>');
        }, 10);
    </script>
</head>
<body>
<h1>授权中，请稍后...</h1>
</body>
</html>
