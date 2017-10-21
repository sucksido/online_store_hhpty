<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //Table name
    protected $table ='purchases';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;


}
