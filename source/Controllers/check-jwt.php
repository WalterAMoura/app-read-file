<?php

    use Source\Models\AuthTokenJWT as ModelsAuthTokenJWT;

    function checkAuth($token){
        $checkTokenJWT = new ModelsAuthTokenJWT();
        return $checkTokenJWT->checkAuth($token);
    }