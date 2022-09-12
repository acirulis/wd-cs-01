<?php

declare(strict_types=1);

require_once "mergeLists.php";

$solution = new MergeLists();

$list1 = $solution->constructList(2, 4, 6, 8);
$list2 = $solution->constructList(1, 3, 5);
$list3 = $solution->constructList(4);
$list4 = $solution->constructList();
$list5 = $solution->constructList(1, 3, 5, 10);

echo "Test-1\n";
$result1 = $solution->mergeTwoLists($list1, $list2);
echo "Expected: ";
$solution->printList($solution->constructList(1, 2, 3, 4, 5, 6, 8));
echo "Solution: ";
$solution->printList($result1);

echo "Test-2\n";
$result1 = $solution->mergeTwoLists($list3, $list2);
echo "Expected: ";
$solution->printList($solution->constructList(1, 3, 4, 5));
echo "Solution: ";
$solution->printList($result1);

echo "Test-3\n";
$result1 = $solution->mergeTwoLists($list3, $list4);
echo "Expected: ";
$solution->printList($solution->constructList(4));
echo "Solution: ";
$solution->printList($result1);

echo "Test-4\n";
$result1 = $solution->mergeTwoLists($list4, $list4);
echo "Expected: ";
$solution->printList($solution->constructList());
echo "Solution: ";
$solution->printList($result1);

echo "Test-5\n";
$result1 = $solution->mergeTwoLists($list2, $list5);
echo "Expected: ";
$solution->printList($solution->constructList(1,1,3,3,5,5,10));
echo "Solution: ";
$solution->printList($result1);
