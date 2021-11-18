<?php

declare(strict_types=1);

function distance(string $strandA, string $strandB)
{
$array=str_split($strandA);
$array2=str_split($strandB);
$j=0;
if(count($array)<=count($array2)){
for($i=0;$i<count($array);$i++){
    if($array[$i]!=$array2[$i]){
        $j++;
    }

}
$j=$j+count($array2)-count($array);

echo $j;
}
else{
for($i=0;$i<count($array2);$i++){
    if($array[$i]!=$array2[$i]){
        $j++;
    }

}
$j=$j+count($array)-count($array2);

echo $j;

}}
distance("GAGCCTACTAACGGGAT","CATCGTAATGACGGCCT");
?>