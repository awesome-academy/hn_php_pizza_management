<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_date',
        'order_address',
        'total',
        'note',
        'payment_method',
        'status',
    ];

    protected $appends = ['full_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function getFullNameAttribute()
    {
        return $this->user->fullname;
    }

    public function formatDate()
    {
        return date('d-m-Y H:i:s', strtotime($this->order_date));
    }
}
