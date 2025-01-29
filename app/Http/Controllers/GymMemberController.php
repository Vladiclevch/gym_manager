<?php

namespace App\Http\Controllers;

use App\Models\GymMember;
use Illuminate\Http\Request;

class GymMemberController extends Controller
{
    public function create() {
        $members = GymMember::all();
        return view('add-member');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'card_id' => ['required', 'string', 'size:8', 'unique:gym_members,card_id'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'phone' => ['nullable', 'string'],
            'email' => ['nullable', 'string', 'email', 'unique:gym_members,email'],
            'notes' => ['nullable', 'string']
        ]);

        GymMember::create($validated);

        return redirect('home');
    }
}
