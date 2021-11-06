<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Habitat extends Model
{
    use HasFactory;

    protected $table = 'habitats';
    protected $primaryKey = 'code';
    protected $keyType = 'string';
    protected $fillable = ['code','name','humidity','min_size','max_size','description','image','description'];

    protected function animal(){
        return $this->hasMany(Animal::class, 'habitat_name','code');
    }
}
