<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterAppVer extends Model
{
    protected $table = 'master_app_ver';
    protected $fillable = ['id', 'version'];
}
