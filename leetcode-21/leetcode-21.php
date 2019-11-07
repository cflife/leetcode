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
    function mergeTwoLists($l1, $l2) {
        $res = new ListNode(-1);
        $curr = $res;
        while($l1 != null && $l2 != null) {
            if($l1->val <= $l2->val){
                $curr->next = $l1;
                $l1 = $l1->next;
            }else{
                $curr->next = $l2;
                $l2 = $l2->next;
            }
            $curr = $curr->next;
        }
        $curr->next = $l1 == null ? $l2 : $l1;
        return $res->next;
    }
}
