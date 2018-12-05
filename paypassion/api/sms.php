<?php
    function sendSMS($num, $message){
        $num = "91" . $num;
        $string = "http://login.blesssms.com/api/mt/SendSMS?user=manu2323&password=8050807771&senderid=AMBDNT&channel=Trans&DCS=0&flashsms=0&number=".$num."&text=".$message."&route=0";
        $string = str_replace(" ", "%20", $string);
        $json_string = file_get_contents($string);
        $array = json_decode($json_string,FALSE);
        $errorCode = $array->ErrorCode;
        $errorMessage = $array->ErrorMessage;
        if ($errorCode=="000" && $errorMessage=="Done"){
            return "success";
        } else {
            return "failure";
        }
    };
?>