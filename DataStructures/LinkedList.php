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
    public function insertAtFirst($data = NULL)
    {
        $new_node = new ListNode($data);
        if ($this->first_node === NULL) {
            $this->first_node = &$new_node;
        } else {
            $current_first_node = $this->first_node;
            $this->first_node = &$new_node;
            $new_node->next = $current_first_node;
        }
        $this->total_nodes++;
        return true;
    }

    /**
     * Insert after a specific Node in linked list.
     *
     * @param string $data
     * @param string $query
     * @return void
     */
    public function insertAfter(string $data = NULL, string $query)
    {
        if ($this->total_nodes) {
            $next_node = NULL;
            $new_node = new ListNode($data);
            $current_node = $this->first_node;

            while ($current_node !== NULL) {

                if ($current_node->data === $query) {
                    if ($next_node !== NULL) {
                        $new_node->next = &$next_node;
                    }
                    $current_node->next = $new_node;
                    $this->total_nodes++;
                    break;
                }

                $current_node = $current_node->next;
                $next_node = $current_node->next;
            }
        }
    }

    /**
     * Searching functions inside LinkedList
     *
     * @param string $data
     * @return mixed
     */
    public function search(string $data = NULL)
    {
        if ($this->total_nodes) {
            $current_node = $this->first_node;
            while ($current_node !== NULL) {
                if ($current_node->data === $data) {
                    // print_r($current_node);
                    return $current_node;
                }
                $current_node = $current_node->next;
            }
            return false;
        }
    }

    /** 
     * Delete first node    
     *
     * @return bool
     */
    public function deleteFirstNode(): bool
    {
        if ($this->first_node !== NULL) {
            if ($this->first_node->next !== NULL) {
                $this->first_node = $this->first_node->next;
            } else {
                $this->first_node = NULL;
            }
            $this->total_nodes--;
            return true;
        }
        return false;
    }

    /**
     * Delete last node
     *
     * @return boolean
     */
    public function deleteLastNode(): bool
    {
        if ($this->first_node !== NULL) {
            $current_node = $this->first_node;
            while ($current_node->next !== NULL) {
                $previousNode = $current_node;
                $current_node = $current_node->next;
            }
            $previousNode->next = NULL;
            $this->total_nodes--;
            return true;
        }
        return false;
    }

    /**
     * Search and delete
     *
     * @param string $query
     */
    public function delete(string $query = NULL)
    {
        if ($this->first_node) {
            $previous = NULL;
            $currentNode = $this->first_node;

            while ($currentNode !== NULL) {
                if ($currentNode->data === $query) {
                    if ($currentNode->next === NULL) {
                        $previous->next = NULL;
                    } else {
                        if (isset($previous)) {
                            $previous->next = $currentNode->next;
                        } else {
                            $this->deleteFirstNode();
                            break;
                        }
                    }
                    $this->total_nodes--;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    /**
     * Display linked-list nodes
     *
     * @return void
     */
    public function display(): void
    {
        echo "Total items = {$this->total_nodes}" . PHP_EOL;
        $current_node = $this->first_node;
        while ($current_node !== NULL) {
            echo $current_node->data . PHP_EOL;
            $current_node = $current_node->next;
        }
    }

    /**
     * Reverse a linked list
     *
     * @return void
     */
    public function reverse(): void
    {
        if ($this->first_node !== NULL) {
            if ($this->first_node->next !== NULL) {
                $reversedList = NULL;
                $next = NULL;
                $currentNode = $this->first_node;
                while ($currentNode !== NULL) {
                    $next = $currentNode->next;
                    $currentNode->next = $reversedList;
                    $reversedList = $currentNode;
                    $currentNode = $next;
                }
                $this->first_node = $reversedList;
            }
        }
    }

    /**
     * Get Nth node
     *
     * @param integer $n
     * @return mixed
     */
    public function getNthNode(int $n = 0): mixed
    {
        $current_node = $this->first_node;
        $count = 1;
        while ($current_node !== NULL) {
            if ($count === $n) {
                return $current_node;
            }
            $count++;
            $current_node = $current_node->next;
        }
    }
}

$linked_list = new LinkedList();
$linked_list->insert("One");
$linked_list->insert("Two");
$linked_list->insert("Three");

// $linked_list->insertAtFirst("Zero");

$linked_list->display();

// echo "2nd element is : " . $linked_list->getNthNode(2)->data . PHP_EOL;

// $linked_list->reverse();
// $linked_list->display();

// $linked_list->delete('One');
// $linked_list->display();

// $linked_list->deleteLastNode();
// $linked_list->display();

// $linked_list->deleteFirstNode();
// $linked_list->display();

// $linked_list->insertAfter("Four", "Three");
// $linked_list->display();

// $linked_list->search("Zero");
