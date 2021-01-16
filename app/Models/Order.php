<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'receipt_id',
        'amount_clp',
        'amount_ves',
        'slug',
        'voucher'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }
}
