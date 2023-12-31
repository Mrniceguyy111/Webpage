<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'document',
        'document_type',
        'last_purchase',
        'subscription_level',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'subscription_level');
    }

    public function addresses()
    {
        return $this->belongsTo(Address::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }


    public function team()
    {
        return $this->belongsTo(Team::class);
    }


    public function getLastBuyAttribute()
    {
        // Convierte la cadena a un objeto Carbon

        if ($this->last_purchase != null) {
            $lastPurchaseDate = \Carbon\Carbon::parse($this->last_purchase);
            return $lastPurchaseDate->diffForHumans();
        } else {
            return "No hay ultima compra 😿";
        }
    }
}
