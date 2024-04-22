<header class="p-0 shadow navbar navbar-dark sticky-top bg-dark flex-md-nowrap">
    <a class="px-3 navbar-brand col-md-3 col-lg-2 me-0" href="{{ route('home') }}">
        <img src="{{asset('/img/logo-vr.png')}}" style="width:64px; height:64px; " alt="VR Lab"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button class="px-3 border-0 nav-link bg-dark" type="submit">Logout <span data-feather="log-out"
                        class="align-text-bottom"></span></button>
            </form>
        </div>
    </div>
</header>
