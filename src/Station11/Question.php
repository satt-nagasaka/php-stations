<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $budget = 300;
        $sweets = $this->getSweetsLessThanBudget($sweets,$budget);
        $keys = $this->getRandomKeys($sweets,$budget);
        $returnArray = $this->makeCombination($sweets,$keys);
        return $returnArray;

    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $resultArray = [];
        foreach ($sweets as $sweet) {
            if($sweet['price'] >= $budget){
                //除外
            }else{
                $resultArray[] = $sweet;
            }
        }
        return $resultArray;
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        $i = 0;
        while ($i <= 0) {
            $total = 0;
            $keys = array_rand($lessThanBudgetSweets, 3);
            foreach($keys as $key) {
                $total += $lessThanBudgetSweets[$key]['price'];
            }
            if($total <= $budget) {
                break;
            }
        }
        return $keys;
    }

    private function makeCombination(array $sweets, array $keys)
    {
        $combination = [];
        foreach ($keys as $key) {
            $combination[] = $sweets[$key];
        }
        return $combination;
    }
}
