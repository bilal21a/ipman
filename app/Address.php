<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table= "addresses";
    protected $fillable = [
        'ip_address', 'description', 'location', 'previous', 'type'
    ];
}
