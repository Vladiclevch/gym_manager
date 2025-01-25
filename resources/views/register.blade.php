<form method="POST" action="{{ route("register.store") }}">
    @csrf
    <label>User name</label>
    <input type="text" name="name" value="{{ old('name') }}" required>
    @error('name')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    @error('email')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Confirm password</label>
    <input type="password" name="password_confirmation" required>
    @error('password')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <button type="sudmit">Send</button>
</form>
