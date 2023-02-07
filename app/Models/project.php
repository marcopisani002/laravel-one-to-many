<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
class project extends Model
{
    use HasFactory;
      protected $fillable = 
   ["name","description","cover_img","type_id"] ;


   public function type()
   {
     return $this->hasOne(Type::class,"id","type_id");
   }





}
