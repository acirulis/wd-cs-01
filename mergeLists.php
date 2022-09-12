<?php

declare(strict_types=1);

class ListNode
{
    public int $val = 0;
    public ListNode|null $next = null;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class MergeLists
{
    public function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        //TODO Implement your solution here!
        return null;
    }

    public function printList(?ListNode $node): void
    {
        if (null === $node) {
            echo "[]\n";
            return;
        }
        do {
            echo "[{$node->val}]";
            if (null !== $node->next) {
                echo " -> ";
            }
        } while ($node = $node->next);
        echo "\n";
    }

    public function constructList(...$numbers): ?ListNode
    {
        $head = $current = null;

        foreach ($numbers as $number) {
            $node = new ListNode();
            $node->val = $number;
            if (null === $head) {
                $head = $node;
            } else {
                $current->next = $node;
            }
            $current = $node;
        }
        return $head;
    }
}
