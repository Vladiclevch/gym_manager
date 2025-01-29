<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $table = 'membership';

    protected $fillable = [
        'gym_members_id',
        'membership_type',
        'status'
    ];

    public function gymMember() {
        return $this->belongsTo(GymMember::class, 'id');
    }

    public function membershipDates()
    {
        return $this->hasOne(MembershipDate::class);
    }
}
