<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/tweets">
            Home</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/explore">
            Explore</a>
    </li>




    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('users.show', auth()->user()) }}">
            Profile</a>
    </li>
    <li>
        <form action="/logout" method="post">
            @csrf
            <button class="font-bold text-lg mb-4 block">Logout</button>
        </form>
    </li>
</ul>
