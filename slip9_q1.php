<?php
$str = "this is my first program";
$i = 0;
while (@$str[$i++] != NULL);
$i--;
echo "Length of : <b> $str </b> is : $i (programatically)<br><br><br>";
function count_Vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(count_Vowels('sampleInput'));
?>