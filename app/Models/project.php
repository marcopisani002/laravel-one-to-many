<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeTable;

class project extends Model
{
    use HasFactory;
      protected $fillable = 
   ["name","description","cover_img"] ;


   public function types()
   {
     return $this->hasMany(TypeTable::class);
   }





}
