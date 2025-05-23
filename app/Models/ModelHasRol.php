<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelHasRol extends Model
{
    protected $table      = 'model_has_roles';
    protected $fillable = ['role_id', 'model_type','model_id'];
    public $timestamps    = false;

    public $incrementing = false; // 👈 necesario
    protected $primaryKey = null; // 👈 necesario
}
