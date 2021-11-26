<?php

    function hashPass($passw){
        return $hashed_password = hash('sha256', $passw);
    };

?>