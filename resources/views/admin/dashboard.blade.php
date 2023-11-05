HI {{ Auth::user()->name }}. Welcome to Admin Dashboard

<br />

<a class="nav-link  " href="javascript:void();"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
