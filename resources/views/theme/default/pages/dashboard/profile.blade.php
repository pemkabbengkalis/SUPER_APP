<div class="card">
    <div class="card-body">
        <ul>
            <li>
                <a href="{{ route('dashboard') }}">
                    <div class="btn @if (Request::segment(2) == 'dashboard') btn-primary @else btn-light @endif"><i
                            data-feather="home"> </i>Dashboard </div>
                </a>
            </li>
            <li>
                <a href="{{ route('layananpublik') }}">
                    <div class="btn @if (Request::segment(2) == 'layanan') btn-primary @else btn-light @endif"><i
                            data-feather="folder"></i>Informasi Layanan</div>
                </a>
            </li>
            <!--<li>
                <a href="{{ route('profile') }}">
                    <div class="btn btn-light"><i data-feather="clock"></i>Profile </div>
                </a>
            </li>-->
            <li>
                <a href="{{ route('faq') }}">
                    <div class="btn btn-light"><i data-feather="star"></i>FAQ </div>
                </a>
            </li>
        </ul>
    </div>
</div>
