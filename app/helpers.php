<?php

    function is_assoc(array $data){
        return array_keys($data) !== range(0, count($data) - 1);
    }

    function input($key = null){
        return !empty($key)?request()->$key:request()->all();
    }
?>