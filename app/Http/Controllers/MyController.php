<?php
namespace App\Http\Controllers;

use  App\Traits\UsersTrait;

class MyController {
use UsersTrait;

   function index()
   {
   $user = $this->usersAll();
  echo"<pre>";print_r( $user);exit;
   }
    
  
}