<?php

class View{
    function __construct(){
        //echo '<p>Nueva VISTA base</p>';
    }

    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}

?>