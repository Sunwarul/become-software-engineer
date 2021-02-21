<?php

class ListNode
{
    public $data = NULL;
    public $next = NULL;
    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }
}

/**
 * Singly linked list or Linear linked list
 */
class LinkedList
{
    private $first_node = NULL;
    private $total_nodes = 0;

    public function insert(string $data = NULL)
    {
        $new_node = new ListNode($data);
        if ($this->first_node === NULL) {
            $this->first_node = &$new_node;
        } else {
            $current_node = $this->first_node;
            while ($current_node->next !== NULL) {
                $current_node = $current_node->next;
            }
            $current_node->next = $new_node;
        }

        $this->total_nodes++;
        return TRUE;
    }

    public function display()
    {
        echo "Total items = {$this->total_nodes}" . PHP_EOL;
        $current_node = $this->first_node;
        while ($current_node !== NULL) {
            echo $current_node->data . PHP_EOL;
            $current_node = $current_node->next;
        }
    }
}

$linked_list = new LinkedList();
$linked_list->insert("One");
$linked_list->insert("Two");
$linked_list->insert("Three");

$linked_list->display();
