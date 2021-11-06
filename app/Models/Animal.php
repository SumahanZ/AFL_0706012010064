<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animals';
    protected $fillable = ['animal_code','name','latin_name','species','habitat_name','class','description'];
    
    protected function habitats(){
        return $this->belongsTo(Habitat::class, 'habitat_name','code');
    }
}
