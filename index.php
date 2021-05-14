<?php
include_once 'MyList.php';
$arr = [0,1,2,3,4];
$arr1 = [5,6,7,8,9,10];
$mylist = new MyList(10,$arr);
$mylist1 = new MyList(10,$arr1);
$mylist->add(3);
$mylist->add(4);
$mylist->add(4);
$mylist->add(4);
$mylist->add(4);
$mylist->add(4);
echo $mylist->getCount().'<hr>';

echo '<pre>';
print_r($mylist);
echo '</pre>'.'<hr>';
$mylist->reset();
echo "==============>RESET ";
echo '<pre>';
print_r($mylist);
echo '</pre>'.'<hr>';
//--------------------------
$mylist1->add(3);
$mylist1->add(4);
$mylist1->add(4);
$mylist1->add(4);
$mylist1->add(4);
$mylist1->add(4);
echo $mylist1->getCount().'<hr>';

echo '<pre>';
print_r($mylist1);
echo '</pre>'.'<hr>';
$mylist1->reset();
echo "==============>RESET ";
echo '<pre>';
print_r($mylist1);
echo '</pre>';





