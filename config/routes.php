<?php

  $app->post("/auth/login" , "AuthController:Login" );

  $app->post("/reportes/puntosxempresa" , "ReportesController:findByEmpresasPuntos");

  



?>