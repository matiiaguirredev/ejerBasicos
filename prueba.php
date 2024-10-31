<?php

$altura = 25;

echo '<div style="text-align: center"';
for ($i=0; $i <= $altura ; $i++) { 
    
    for ($j=0; $j < $i ; $j++) { 
        echo "* ";
    }
    echo "<br/>";
}

for ($i=$altura; $i >= 0 ; $i--) { 

    for ($j=0; $j < $i ; $j++) { 
        echo "* ";
    }
    echo "<br/>";
}

echo '</div';

?>