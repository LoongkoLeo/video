<?php

//decode by http://www.13bk.cn/
?>﻿<?php
error_reporting(0);
$list = file_get_contents("http://www.360kan.com/dianshi/list");
$list1 = file_get_contents("http://www.360kan.com/dianying/list.php");
$lzz = "#<a class=\"js-tongjip\" href=\"http://www.360kan.com/dianshi/list\\?year=all\\&area\\=all\\&act\\=all\\&cat\\=(.*?)\" target=\"_self\">(.*?)</a>#";
$lzzmv = "#<a class=\"js-tongjip\" href=\"http://www.360kan.com/dianying/list.php\\?year=all\\&area=all\\&act=all\\&cat=(.*?)\" target=\"_self\">(.*?)</a>#";
$lzz1 = "# <a class=\"js-tongjip\" href=\"http://www.360kan.com/dianshi/list\\?cat\\=all\\&area=all\\&act\\=all\\&year\\=(.*?)\" target=\"_self\">(.*?)</a>#";
$lzz2 = "#<a class=\"js-tongjip\" href=\"http://www.360kan.com/dianshi/list\\?cat\\=all\\&year\\=all\\&act\\=all\\&area\\=(.*?)\" target=\"_self\">(.*?)</a>#";
preg_match_all($lzz, $list, $larr);
preg_match_all($lzz1, $list, $larr1);
preg_match_all($lzz2, $list, $larr2);
preg_match_all($lzzmv, $list1, $larrmv);
$cat = $larr[1];
$mcat = $larrmv[1];
$mname = $larrmv[2];
$cat1 = $larr1[1];
$cat2 = $larr2[1];
$name = $larr[2];