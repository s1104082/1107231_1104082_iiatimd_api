<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Donated extends Model
{
    use HasFactory;

    protected $table = 'donated';

    protected $fillable = ['critters_id', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function critters()
    {
      return $this->belongsTo('App\Models\critters', 'critters_id');
    }


    public $timestamps = false;



}
