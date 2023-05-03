<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Click-AP show IP</title>
</head>
<body>
    <div>
<?php
echo '    HTTP_HOST: ' . $_SERVER['HTTP_HOST'];
echo '<br/>';
echo 'gethostbyname: ' . gethostbyname($_SERVER['HTTP_HOST']);
echo '<br/>';
echo '  SERVER_ADDR: ' . $_SERVER['SERVER_ADDR'];
echo '<br/>';
echo '  REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'];
echo '<br/>';
$ip= $_SERVER['REMOTE_ADDR'];
$longisp = @gethostbyaddr($ip);
echo 'gethostbyaddr(主機IP:): ' . $longisp;
?>
    </div>
</body>
</html>