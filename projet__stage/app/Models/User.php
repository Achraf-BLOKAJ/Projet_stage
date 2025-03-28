<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    
        // protected $fillable = ['name', 'email', 'password', 'phone', 'cin', 'role'];
    
        public function technicien()
        {
            return $this->hasOne(Technicien::class); // Si rôle est "technicien", il aura un technicien lié
        }
    
        public function isAdmin()
        {
            return $this->role === 'admin';
        }
    
        public function isCommercial()
        {
            return $this->role === 'commercial';
        }
    
        public function isTechnicien()
        {
            return $this->role === 'technicien';
        }
    
        public function isClient()
        {
            return $this->role === 'client';
        }
    
    


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

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
}


