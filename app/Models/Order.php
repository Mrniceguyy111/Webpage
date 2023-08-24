<?php

namespace App\Models;

// use Alexo\LaravelPayU\Payable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    // use Payable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id',
        'status',
        'value',
        'order_date',
        'delivery_address',
        // PayU requests
        'reference',
        'payu_order_id',
        'transaction_id',



    ];

    public function address()
    {
        return $this->belongsTo(Address::class, 'delivery_address');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
