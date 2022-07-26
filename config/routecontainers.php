<?php
return function($container)
{ 

    $container["AuthController"] = function()
    {
      return new \App\Controllers\AuthController;
    };

    $container["ReportesController"] = function()
    {
      return new \App\Controllers\ReportesController;
    };
     

};