<?php

    function logout() {
        
        setcookie("username","",time() - 1);

        return homeContent();
    }