class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        foreach($nums as $k=>$v) {
            $two = $target - $v;
            if(isset($map[$two])){
               return [$map[$two],$k];
            }
            $map[$v] = $k;
        }
    }
}
