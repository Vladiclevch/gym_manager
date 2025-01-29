<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymMember extends Model
{
    use HasFactory;

    protected $table = 'gym_members';

    protected $fillable = [
        'card_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'notes'
    ];

    public function membership() {
        return $this->hasOne(Membership::class, 'gym_members_id');
    }
}
