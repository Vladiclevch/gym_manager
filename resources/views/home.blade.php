<h1>Dashboard</h1>
@auth
    <p>Hello {{ Auth::user()->name }}!</p>
    <p><a href="{{ route("logout") }}">Logout</a></p>

    <a href="{{ route('add-member') }}" class="btn btn-primary">Add member</a>

    @else
    <p><a href="{{ route("login") }}">Login</a></p>
    <p><a href="{{ route("register") }}">Register</a></p>
@endauth
