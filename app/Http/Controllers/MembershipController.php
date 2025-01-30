<?php

namespace App\Http\Controllers;

use App\Models\GymMember;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function create($memberId)
    {
        $member = GymMember::findOrFail($memberId);
        return view('add-membership', compact('member'));
    }

    public function store(Request $request, $memberId)
    {
        $validated = $request->validate([
            'membership_type' => ['required', 'string', 'in:member,trainer'],
            'status' => ['required', 'string', 'in:active,inactive,expired']
        ]);

        $member = GymMember::findOrFail($memberId);

        $member->membership()->create($validated);

        return redirect()->route('home');
    }
}
