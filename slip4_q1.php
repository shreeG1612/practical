<?php
$fruit=array('apple','orange','bannana');
$new=array('mango','watermelon');
array_splice($fruit,3,2,$new);
print_r ($fruit);
?>