<?php

$id = '';

$id = $id.randw();

function randw($length=6){
    return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),0,$length);
}
echo $id;


?>