<?php

namespace App\Models;

use Alexo\LaravelPayU\Payable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use Payable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'reference', 'payu_order_id',  'transaction_id', 'state', 'value', 'user_id'
    ];
}
