<form method="POST" action="{{ route('gym-members.store') }}">
    @csrf
    <label>Card id</label>
    <input type="text" name="card_id" value="{{ old('card_id') }}" required>
    @error('card_id')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label>First name</label>
    <input type="text" name="first_name" value="{{ old('first_name') }}" required>
    @error('first_name')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label>Last name</label>
    <input type="text" name="last_name" value="{{ old('last_name') }}" required>
    @error('last_name')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label>Phone</label>
    <input type="text" name="phone" value="{{ old('phone') }}">
    @error('phone')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label>Notes</label>
    <textarea name="notes">{{ old('notes') }}</textarea>

    <button type="sudmit">Send</button>
</form>
