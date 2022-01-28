 <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-white-text-on-top">
    <div class="container">
        <div class="nk-nav-table">
            <a href="{{ route('home') }}" class="nk-nav-logo">
                <!-- <img src="{{asset('frontend/assets/images/logo-light.svg') }}" alt="" width="85" class="nk-nav-logo-onscroll"> -->
                <img src="{{asset('frontend/assets/images/logo.svg') }}" alt="" width="85">
            </a>

            <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                <li class="">
                    <a href="index.html#about">About</a>
                </li>
                <li class="">
                    <a href="index.html#contact">Contact</a>
                </li>
                <li>
                    <a href="{{ route('portfolios.index') }}">Portfolio</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
            </ul>

            <ul class="nk-nav nk-nav-right nk-nav-icons">
                <li class="single-icon hidden-lg-up">
                    <a href="#" class="nk-navbar-full-toggle">
                        <span class="nk-icon-burger">
                            <span class="nk-t-1"></span>
                            <span class="nk-t-2"></span>
                            <span class="nk-t-3"></span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
 </nav>