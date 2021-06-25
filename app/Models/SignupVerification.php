<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SignupVerification extends Model
{
    use HasFactory;

    protected $table = 'signup_verifications';
    public $timestamps = true;

    protected $fillable = [
        'type',
        'email',
        'phone',
        'token'
    ];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    use SoftDeletes;

}
