<?php

class Access
{
    public function checkAccess(){

        if($_SESSION["authorize"] == 1){
            return true;
        }else{
            return false;
        }
    }

    public function doLogin()
    {

    }


    public function doLogout(){

    }
}