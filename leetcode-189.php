class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $lens = count($nums);
        if($k >= $lens) $k = $k%$lens;
        $this->reverse($nums,0,$lens-1);
        $this->reverse($nums,0,$k-1);
        $this->reverse($nums,$k,$lens-1);
    }

    function reverse(&$nums,$start,$end) {
        while($start < $end){
            $temp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $temp;
            $start++;
            $end--;
        }
    }
}
