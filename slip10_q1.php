<?php
// Write a function to find the length of given string without using built in functions.
$str = "this is my first program";
$i = 0;
while (@$str[$i++] != NULL);
$i--;
echo "Length of : <b> $str </b> is : $i (programatically)<br><br><br>";


// Write a function to count the total number of vowels i.e. (a,e,i,o,u) ) from the string.
function count_Vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
echo "no of vowels: ";
print_r(count_Vowels($str));
echo "<br><br><br>";



// Convert the given string to lowercase and then to Title case.
$strmixed = "LOWESCASE ExamPle";
echo strtolower($strmixed);
echo "<br><br><br>";
echo ucwords('this is example of title case');
echo "<br><br><br>";


// Pad the given string with “*” from left and right both the sides.
$str2 = "  Hello World  ";
   echo str_pad($str2,20,"*",STR_PAD_BOTH);

   echo "<br><br><br>";

//    Remove the leading whitespaces from the given string.
   $str3 = "Remove  white       spaces";  
   //Replaces every space character with blank  
   $str1 = str_replace(' ','',$str3);  
   echo "String after removing all the white spaces : $str3";  
?>

