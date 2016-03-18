<?php
include './classes/StringType.php';
include './classes/ArrayList.php';

$string1 = new StringType("one");
$string2 = new StringType("two");
$string3 = new StringType("three");

$stringTypeList = new ArrayList("StringType");

$stringTypeList->addItem($string3);
$stringTypeList->addItem($string1);
$stringTypeList->addItem($string2);

var_dump($stringTypeList->getList());

$stringTypeList->sort();

var_dump($stringTypeList->getList());

echo "<strong>With compare Function!</strong>";

$func = function($a, $b) {
			if ($a == $b) {
				return 0;
			}
			return ($a > $b) ? -1 : 1;
		};

$stringTypeList2 = new ArrayList("StringType", $func);

$stringTypeList2->addItem($string3);
$stringTypeList2->addItem($string1);
$stringTypeList2->addItem($string2);

var_dump($stringTypeList2->getList());

$stringTypeList2->sort();

var_dump($stringTypeList2->getList());