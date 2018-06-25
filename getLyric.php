<?php
$lyricSrc=$_GET["value"];
//打开文件
$openFile = fopen( 'upload/'.$lyricSrc.'.lrc', "r");
//读取文件
$readFile =fread($openFile,filesize( 'upload/'.$lyricSrc.'.lrc' ));
//关闭文件
fclose($openFile);
echo($openFile);
?>
