<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';

    protected $cancertype = array(
        '1' => 'Kanker Paru-Paru',
        '2' => 'Kanker Hati',
        '3' => 'Kanker Darah',
        '4' => 'Kanker Usus Besar'
    );

    public function getStatusAttribute()
    {
        return $this->cancertype[$this->type];
    }

    public function users(){
        return $this->belongsTo('App\Models\User', 'id');
    }
}
