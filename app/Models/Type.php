<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Type extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
