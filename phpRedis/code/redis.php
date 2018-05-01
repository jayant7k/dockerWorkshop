<?php
$redis = new Redis();
echo "connecting<br/>".PHP_EOL;
$redis->connect('172.17.0.1');
//$redis->connect("redis");
echo "set key=hello, value=world <br/>".PHP_EOL;
$redis->set('hello','world');
echo "get key=hello<br/>".PHP_EOL;
$data = $redis->get('hello');
echo "value=".$data.PHP_EOL;
echo "<br/>SUCCESS<br/>".PHP_EOL;
