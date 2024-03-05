<?php

namespace App\Service\Calculation;

class indexService
{
    /**
     * 引数の数値で各計算を実行
     * 
     * @param int $num1
     * @param int $num2
     * @return array
     */
    public function getnum($num1,$num2) {
        // 引数が数値か判定
        if(is_int($num1) && is_int($num2)) {
            // 数値の場合
            // 計算結果を配列に格納
            $array = [
                "addition" => $num1+$num2,
                "subtraction" => $num1-$num2,
                "multiplication" => $num1*$num2,
                "dividing" => $num1/$num2,
                "surplus" => $num1%$num2
            ];
        } else {
            // 数値以外の場合
            $array = [];
        }
        
        return $array;
    }
}