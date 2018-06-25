<?php
    $files = array();
    if(@$handle = opendir('./upload')) { //注意这里要加一个@，不然会有warning错误提示：）
        while(($file = readdir($handle)) !== false) {
            if($file != ".." && $file != ".") { //排除根目录；
                $tmp = explode(".",$file);
                $num = count($tmp);
                if($tmp[$num - 1] !== 'lrc') {
                    $files[] = $file;
                }
            }
        }
        closedir($handle);
        for($i = 0; $i < count($files); $i++) {
            error_log("name".$files[$i]);
        }
        echo json_encode($files);
    }
?>