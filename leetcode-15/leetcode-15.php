class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        sort($nums);
        $res = [];
        $n = count($nums);
        if($n < 3){
            return [];
        }
        for($i=0;$i<$n;$i++){
            if($nums[$i] > 0){
                return $res;
            }
            if($i>0 and ($nums[$i] == $nums[$i-1])){
                continue;
            }
            $a = $nums[$i];
            $k = $i+1;
            $j = count($nums) - 1;
            
            while($k < $j){
                $b = $nums[$k];
                $c = $nums[$j];
                if($a+$b+$c > 0){
                    $j--;
                }else if($a+$b+$c < 0){
                    $k++;
                }else{
                    $res[] = [$a,$b,$c];
                    while($k < $j && $nums[$k] == $nums[$k+1]){
                        $k++;
                    }
                    while($k < $j && $nums[$j] == $nums[$j-1]){
                        $j--;
                    }
                    $j--;
                    $k++;
                }
            }
        }
        
        return $res;
    }
}
