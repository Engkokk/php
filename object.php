<?php
    echo "___Object___";
    echo "<br>";
    class Hello {
        var $str;
    }

    $message = new Hello();
    $message ->str="Hello World!";

    echo $message -> str;
    echo "<br><br>";
?>