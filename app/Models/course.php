<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    // courses itu nama tabel, nama modelnya course
    use HasFactory;

    public function category (){
        return $this->belongsTo(Category::class);
    }
    public function tutor_detail (){
        return $this->belongsTo(TutorDetail::class);
    }
}
