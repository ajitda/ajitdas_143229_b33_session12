<?php
$array = array(1,2,array("basis","bitm"));
foreach($array as $v){
    if(is_array($v)){
        foreach($v as $v1){
            echo "$v1 ";
        }
    }else{
        echo "$v ";
    }
}