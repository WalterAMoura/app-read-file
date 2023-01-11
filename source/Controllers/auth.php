<?php

    use Source\Models\AuthTokenJWT as ModelsAuthTokenJWT;

    function auth(){
        $authTokenJWT = new ModelsAuthTokenJWT();
        return $authTokenJWT->login();
    }
