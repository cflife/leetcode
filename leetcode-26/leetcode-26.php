/**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $lens = count($nums);
        if($lens == 0) return 0;
        $i = 0;
        for($j=1;$j<$lens;$j++){
            if($nums[$i] != $nums[$j]){
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i+1;
    }
