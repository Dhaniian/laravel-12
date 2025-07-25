<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [ //ini nanti digunakan untuk tabel yang hanya boleh diiisi
        'nama',
        'no_hp',
        'role',
        'alamat',
        'email',
        'password',
        'google_id',
        'google_token',
        'google_refresh_token',
        'photo',
        'cover_photo',


    ];


    // menggunakan hasmany karena merupakan parent atau induk,karena id user direlasikan ke periksa
    //relasi ke periksa sebagai pasien

    public function pasien(): HasMany
    {
        return $this->hasMany(periksa::class, 'id_pasien');
    }

    //relasi ke periksa sebagai dokter
    public function dokter(): HasMany
    {
        return $this->hasMany(periksa::class, 'id_dokter');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function pasienModels()
    {
        return $this->hasOne(pasienModel::class, 'user_id');
    }
    public function dokterModels()
    {
        return $this->hasOne(dokterModel::class, 'user_id');
    }
}
