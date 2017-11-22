<?php
// 直接包含 phar文件, 会执行其中的index.php
include 'project.phar';

// phar解压缩命令
// http://xxx.com/projectindex.php?a=extractto&path=d:/phar
// 在 d:/phar 目录中, 可以看到源文件
// 可以把 path=d:/phar 替换成自己想保存的路径

// 可以使用以下连接测试文件, 注意m参数的大小写.
// http://xxx.com/projectindex.php
// http://xxx.com/projectindex.php?m=index&a=read
// http://xxx.com/projectindex.php?m=test
// http://xxx.com/projectindex.php?m=test&a=test
// http://xxx.com/projectindex.php?m=test&a=image 输出一张图片

// 也可以直接通过php.exe执行Phar文件
// php.exe project.phar 执行其中的index.php文件
