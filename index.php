<?php
require __DIR__.'/code.php';
if (!is_callable($c = str_replace('/','_',trim(@$_GET['c'],'/')) ?: function() { echo 'Woah!'; }))
  throw new Exception('Error: ' . $c);
unset($_GET['c']);
$c();

