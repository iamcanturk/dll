<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'disk',
        'ram',
        'cpu',
        'port',
        'price',
        'price_currency',
        'status',
        'description',
        'expired_date',
        'user_id',
    ];
}
