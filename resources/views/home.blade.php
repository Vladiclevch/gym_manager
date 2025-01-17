<h1>Dashboard</h1>
@auth
    <p>Hello {{ Auth::user()->name }}!</p>
    <p><a href="{{ route("logout") }}">Logout</a></p>
    @else
    <p><a href="{{ route("login") }}">Login</a></p>
    <p><a href="{{ route("register") }}">Register</a></p>
@endauth
