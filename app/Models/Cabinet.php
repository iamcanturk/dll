<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'u_size',
        'internet',
        'uplink',
        'ip',
        'anti_ddos',
        'price_currency',
        'price',
        'status',
        'description',
        'expired_date',
        'user_id',
    ];
}
