<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'addresses';
    public $timestamps = true;


    protected $fillable = [
        'user_id',
        'address_name',
        'city',
        'state',
        'zip',
        'country',
        'address',
        'address1',
        'address2',
        'latitude',
        'longitude',
        'is_default',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    use SoftDeletes;

    
}
