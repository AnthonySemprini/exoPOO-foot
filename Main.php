<?php

spl_autoload_register(function($class_name){    //lie les pages ensemble dans le bonne oredre
    require $class_name . ".php";
});
