<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"> <a href="index.html"><img class="img-fluid"
                    src="{{ asset('theme') }}/assets/images/logo/logo.png" alt="" /></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('theme') }}/assets/images/logo/logo-icon.png" alt="" /></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                            href="{{ asset('theme') }}/template/index.html" target="_blank">
                            <svg class="stroke-icon">
                                <use href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#fill-home"></use>
                            </svg><span>Dashboard</span></a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <i class="icofont icofont-gears"></i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"> </i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <i class="icofont icofont-power"></i>
                            <span>Keluar </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
