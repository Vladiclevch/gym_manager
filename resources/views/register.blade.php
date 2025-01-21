<form method="POST" action="{{ route("register.store") }}">
    @csrf
    <label>User name</label>
    <input type="text" name="name" value="" required>
    <label>Email</label>
    <input type="email" name="email" value="" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <label>Confirm password</label>
    <input type="password" name="password_confirmation" required>
    <button type="sudmit">Send</button>
</form>
