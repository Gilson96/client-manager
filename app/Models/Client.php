<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [    
        "first_name",
        "last_name",
        "username",
        "dark_mode",
    ];

    public function toggleMode() : bool
    {
        if($this->dark_mode == 1){

            
            return "you are in the dark mode";
            
        } else {

            return "you are in the light mode";
        }
    }
}
