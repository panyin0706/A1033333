<?php
    

    class PostOffice
    {
    
        function mailFiler(){
            $myfile="string.txt";
            if (file_exists($myfile)) 
                {
                    $file=fopen($myfile,"r");
                    fpassthru($file);
                }
            else
            {
            echo "檔案不存在";
            }

                        }
        function mailRegex(){
            $input = "大家好this這是is一個a有趣php的字串test";
            $cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $input);
 
            echo $cleaned;
        }

        function spiltroad(){
            $string="這是mobilenest測試字串";
　          echo mb_substr($string,7,9,"utf-8");
        }

    }

      
    
    
    ?> 