<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipDate extends Model
{
    use HasFactory;

    protected $table = 'membership_dates';

    protected $fillable = [
        'membership_id',
        'start_date',
        'end_date'
    ];

    public function membership() {
        return $this->belongsTo(GymMember::class, 'membership_id');
    }
}
