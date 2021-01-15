<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receipt extends Model
{
    use HasFactory;
    protected $table = 'receipts';
    protected $fillable = [
        'name',
        'email',
        'user_id',
        'r_id',
        'bank',
        'account_type',
        'account_number'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
