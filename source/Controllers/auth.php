<?php

    function auth()
    {
        require_once('/storage/ssd3/766/17371766/public_html/source/Models/AuthTokenJWT.php');
        $authTokenJWT = new \AuthTokenJWT();
        return $authTokenJWT->login();
    }
    /*if(isset($response)){
        http_response_code(200);
        header('Content-Type: application/json; charset=utf-8');
        header("Authorization: Bearer $response");
        echo json_encode(array("status"=>"logged"));
    }else{
        http_response_code(401);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(array("status"=>"unauthorized"));
    }*/

