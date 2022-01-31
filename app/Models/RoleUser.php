<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'roleusers';
    protected $protected = ['id'];

    /**
     * Get the articles in the category.
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
