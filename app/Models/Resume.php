<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model {
    protected $table = "resume";
    protected $fillable = [
        'name',
        'date_birthday',
        'home',
        'education',
        'specialty',
        'experience',
        'salary',
        'created_at'
    ];

}
