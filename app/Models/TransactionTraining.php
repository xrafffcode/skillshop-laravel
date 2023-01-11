<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'training_id',
        'transaction_code',
        'name',
        'email',
        'transaction_total',
        'transaction_status',
        'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function training()
    {
        return $this->belongsTo(Training::class, 'training_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'transaction_training_id', 'id');
    }

    public function pay_later()
    {
        return $this->hasOne(PayLater::class, 'transaction_training_id', 'id');
    }
}
