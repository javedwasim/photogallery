<?php
 function DecodeQueryString($string){
     $char = str_split($string);
     $strToReturn =array();
     $counter=1;
     $max = sizeof($char);
     for ($i = 0; $i < $max; $i ++) {
            if (($counter % 2)== 1){
                $strToReturn[]=$char[$i];
             }
            $counter++;
        }
        $reversed = array_reverse($strToReturn);
        return implode($reversed);
}
    function Process(){
        $first_string=  DecodeQueryString($_GET['skeycode']);
        $second_string=DecodeQueryString($_GET['act']);
        return $first_string."@".$second_string;
    }
    echo Process(); //commit added
 ?>