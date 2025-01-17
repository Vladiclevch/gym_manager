<form method="POST" action="{{ route("registerCreate") }}">
    @csrf
    <label>User name</label>
    <input type="text" name="name" value="">
    <label>Email</label>
    <input type="email" name="email" value="">
    <label>Password</label>
    <input type="password" name="password" value="">
    <button type="sudmit">Send</button>
</form>
