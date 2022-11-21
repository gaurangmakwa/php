<?php
    //cookie create
    setcookie("admin","gaurang");

    setcookie("user","php",time()+3600);

   echo"cookie".$_COOKIE['user'];
   //check
   if(isset($_COOKIE['user'])){
        echo"cookie is set";
   }
   setcookie("admin","",time()-1);
?>