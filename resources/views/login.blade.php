<form method="POST" action="{{ route("authentication") }}">
    @csrf
    <label>Email</label>
    <input type="email" name="email" value="">


    <label>Password</label>
    <input type="password" name="password" value="">

    @error('auth')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <button type="sudmit">Send</button>
</form>
