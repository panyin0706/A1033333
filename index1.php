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
            $input = "string.txt";
            $cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $input);
 
            echo $cleaned;
        }

    }

      
    
    
    ?> 