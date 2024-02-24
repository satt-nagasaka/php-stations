<?php

namespace Src\Station09;

class Question
{
    public function main(): array
    {
        $users = [
            [
                'id' => 1,
                'last_name' => '山田',
                'first_name' => '太郎',
                'age' => 20,
                'password' => 'yamada',
            ],
            [
                'id' => 2,
                'last_name' => '鈴木',
                'first_name' => '次郎',
                'password' => 'suzuki',
            ],
            [
                'id' => 3,
                'last_name' => '佐藤',
                'first_name' => '花子',
                'password' => 'sato',
            ],
        ];

        $resultArray = [];
        foreach ($users as $userData) {
            $resultArrayData = [];
            $fullNameData = "";
            $ageExistFlag = false;
            foreach ($userData as $key => $value) {
                if ($key === 'password') {
                    continue;
                }else if($key === 'last_name'){
                    $fullNameData = $value . $fullNameData;
                }else if($key === 'first_name'){
                    $fullNameData = $fullNameData . $value;
                }else if($key === 'age'){
                    $ageExistFlag = true;
                }
                $resultArrayData[$key] = $value;
            }
            $resultArrayData["full_name"] = $fullNameData;
            if(!$ageExistFlag){
                $resultArrayData["age"] = 0;
            }
            $resultArray[] = $resultArrayData;
        }
        

        
        // print_r($resultArray);
        return $resultArray;
    }
}
// (new Question())->main();