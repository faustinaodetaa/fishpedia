<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'user_id',
        'profession',
        'address'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
