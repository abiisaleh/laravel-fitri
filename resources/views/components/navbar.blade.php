<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:{{ $kontak['email'] }}">{{ $kontak['email'] }}</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $kontak['telp'] }}</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://www.twitter.com/{{ $kontak['twitter'] }}" class="twitter"><i
                        class="bi bi-twitter-x"></i></a>
                <a href="https://www.facebook.com/{{ $kontak['facebook'] }}" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/{{ $kontak['instagram'] }}" class="instagram"><i
                        class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/logo-al-fitroh.jpg" alt="logo">
                <h1 class="sitename">{{ config('app.name') }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#footer">Contact</a></li>
                    <li>
                        <div class="d-flex" style="padding: 1em;">
                            <a href="/admin" class="btn btn-outline-success">Masuk</a>
                        </div>
                    </li>
                    <li></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>
