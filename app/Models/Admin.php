<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel
    protected $table = 'admins';

    // Kolom yang dapat diisi
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Menyembunyikan kolom password dari array JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casting kolom tertentu ke tipe data yang diinginkan
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
