<?php

function ucgen($a)
{
    for ($i = 0; $i < $a; $i++) {
        $j = 0;
        while ($j <= $i) {
            $j++;
            echo $j * 0;
        }
        echo '<br>';
    }
}

ucgen(15);
