<?php
$names = array('Brad', 'Faisal', 'Tushar', 'Bithi');

$count=0;

while($count <count ($names)){
    echo "<li>Hi, My Name Is $names[$count]</li>";
    $count++;
}
?>