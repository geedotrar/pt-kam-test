<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteLoc extends Model
{
    use HasFactory;

    // protected $fillable = ['kabupaten', 'status'];
    protected $primaryKey = 'site_id';

    protected $keyType = 'string';


    protected $table = 'site_loc';
    protected $fillable = ['site_id', 'kabupaten', 'status'];
    public $timestamps = false;

}
