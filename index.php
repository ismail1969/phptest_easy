<?php

print 'hello world';

$arr = array(
    "one" => "bir",
    "two" => "iki",
);

$json_obj = json_encode($arr);

print $json_obj;
