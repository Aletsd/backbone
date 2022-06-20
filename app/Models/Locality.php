<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;
    protected $guarded = [];

    //protected $fillable = ['zip_code', 'locality'];


    public function federal_entity()
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }

    public function settlements()
    {
        return $this->hasMany(Settlement::class)->with('settlement_type');
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }



}
