<?php
include_once 'MyList.php';
$randomCountPush = random_int(1,10);
$arr = [0,1,2,3,4];
$arr1 = [5,6,7,8,9,10];
$mylist = new MyList(10,$arr);

for ($i = 0; $i < $randomCountPush; $i++){
    $randomNum = random_int(10,20);
    $mylist->add($randomNum);
}


echo 'ArrayLength: '.$mylist->getCount().'<hr>';

echo '<pre>';
print_r($mylist);
echo '</pre>'.'<hr>';

$mylist->reset();
echo "==============>RESET ";
echo '<pre>';
print_r($mylist);
echo '</pre>'.'<hr>';





