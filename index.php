<?php


function bizz(&$handle){
    $path = dirname(__FILE__);
    $handle = fopen($path . '\numbers.txt', 'r');
    if ($handle) {
        while (false !== ($mark = fgets($handle))) {
            $result = explode(" ", $mark);

                for ($i = 1; $i <= $result[2]; $i++) {

                            if ($i % $result[0] == 0 && $i % $result[1] == 0) {
                                echo "FB ";
                            } elseif ($i % $result[0] == 0) {
                                echo "F ";
                            } elseif ($i % $result[1] == 0) {
                                echo "B ";
                            } else {
                                echo $i . " ";
                            }


                }
            echo '<br>';
            }
        }


}
bizz($OpenFile);
