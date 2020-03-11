#!/usr/bin/php
<?PHP

if ($argc >= 2)
{
    $arr = array();
    $arr = preg_split('/[\s]+/', $argv[1]);
    foreach ($arr as $elem)
    {
        if ($elem !== "")
        {
            echo "$elem";
            if ($elem != end($arr))
                echo " ";
        }
    }
    echo "\n";
}

?>