<?php

namespace App;

use App\Scopes\VersionControlScope;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'usuarios';
    protected $fillable = ['nombre', 'mail'];
}
