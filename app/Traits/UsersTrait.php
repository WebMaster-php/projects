<?php 
 namespace App\Traits;
 use App\User;
 trait UsersTrait
 {
    public function usersAll() {
        // Get all the users from the users Table.
       return $new=User::all();
    }
 }   


