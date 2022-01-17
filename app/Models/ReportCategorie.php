<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportCategorie extends Model
{
    use HasFactory;
    protected $fillable=['tip'];

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
