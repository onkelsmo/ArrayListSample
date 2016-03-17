<?php
include './classes/StringType.php';
include './classes/ArrayList.php';

$string1 = new StringType("one");
$string2 = new StringType("two");
$string3 = new StringType("three");

$stringTypeList = new ArrayList("StringType");

$stringTypeList->addItem($string1);
$stringTypeList->addItem($string2);
$stringTypeList->addItem($string3);

var_dump($stringTypeList->getList());