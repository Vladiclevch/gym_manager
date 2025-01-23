<h1>Dashboard</h1>
@auth
    <p>Hello {{ Auth::user()->name }}!</p>
    <p><a href="{{ route("logout") }}">Logout</a></p>

    @if ($posts->isEmpty())
        <p>No data</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <p>{{ $post->id }}</p>
                </li>
            @endforeach
        </ul>
    @endif

    @else
    <p><a href="{{ route("login") }}">Login</a></p>
    <p><a href="{{ route("register") }}">Register</a></p>
@endauth
