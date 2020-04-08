<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/2
 * Time: 16:26
 */
//连接本地的 Redis 服务
header("Content-Type:text/html;charset=utf-8");
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
echo "Connection to server sucessfully";
//查看服务是否运行
echo "Server is running: " . $redis->ping();
?>