<h1>Halaman Profile</h1>
<ul>
    <li><a href="{{ route('front_home') }}">Home</a></li>
    <li><a href="{{ route('front_about') }}">About</a></li>
</ul>
<p>Welcome di halaman Profile</p>
<p>Username is:{{ $un }}</p>
<p>Age of {{ $un }} is {{ $ag }}</p>
