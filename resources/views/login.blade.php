<form method="POST" action="{{ route("authentication") }}">
    @csrf
    <label>email</label>
    <input type="email" name="email" value="">
    <label>Password</label>
    <input type="password" name="password" value="">
    <button type="sudmit">Send</button>
</form>
