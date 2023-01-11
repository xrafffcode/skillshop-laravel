<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayLater extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_training_id',
        'id_card_image',
        'selfie_photo',
    ];

    public function transaction_training()
    {
        return $this->belongsTo(TransactionTraining::class, 'transaction_training_id', 'id');
    }
}
