<?php
$chaoyu = require_once(dirname(__FILE__) . '/restful-chaoyu.php');
$dingding = require_once(dirname(__FILE__) . '/restful-dingding.php');

return array_merge($chaoyu,$dingding, [
    '/<controller>/<action>'=>'/<controller>/<action>',
]);
