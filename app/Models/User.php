<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'contact_no',
        'role',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function events()
{
    return $this->belongsToMany(Event::class)->withPivot('preferred_date');
}

public function volunteerStatus()
    {
        return $this->hasOne(VolunteerStatus::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }


}
