<?php

// Конечно где-нибудь на стэке можно найти решение через деление по модулю, но...
class Task3
{
    private function isInt32(int $i) : bool {
        return $i >= -2147483648 && $i <= 2147483647 ? true : false;
    }
    
    public function revInt(int $i) : int {
        if(!$this->isInt32($i)) return 0;
        
        $str = strval($i);
        $result = '';
    
        for($j = strlen($str) - 1; $j >= 0; $j--) {
            if($j == 0 && $str[$j] == '-') {
                $result = '-' . $result;
                break;
            }
    
            $result .= $str[$j];
        }
    
        $result = (int)$result;
        
        return $this->isInt32($result) ? $result : 0;
    }
}
