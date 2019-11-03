/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $list = new ListNode(0);
        $curr = $list;
        $add = 0;
        while($l1 || $l2) {
            $l1v = $l1->val ? $l1->val : 0;
            $l2v = $l2->val ? $l2->val : 0;
            $value = $l1v+$l2v+$add;
            $add = intval($value/10);
            if($l1 != null) {
                $l1 = $l1->next;
            }
            if($l2 != null) {
                $l2 = $l2->next;
            }
            $curr->next = new ListNode($value%10);;
            $curr = $curr->next;
        }
        if($add > 0) {
            $curr->next = new ListNode($add);
        }
        return $list->next;
    }
}
