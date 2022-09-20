<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bnl5rka54kovz8oygmrk-mysql.services.clever-cloud.com","u2ybeeqqaiwwwcog","u2ybeeqqaiwwwcog","bnl5rka54kovz8oygmrk");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }