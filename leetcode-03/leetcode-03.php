class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $res = 0;
        $str_arr = [];
        for($i=0,$j=0;$j<strlen($s);$j++){
            if(isset($str_arr[$s[$j]])){
                $i = max($str_arr[$s[$j]],$i);
            }
            $res = max($res,$j-$i+1);
            $str_arr[$s[$j]] = $j+1;
        }

        return $res;
    }
}
