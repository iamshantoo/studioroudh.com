
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements-portfolios" aria-expanded="false" aria-controls="form-elements-portfolios">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Portfolios</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements-portfolios">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('portfolio.index')}}">All Portfolios</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('portfolio-category.index')}}">Categories</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements-blogs" aria-expanded="false" aria-controls="form-elements-blogs">
            <i class="ti-list menu-icon"></i>
            <span class="menu-title">Blogs</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements-blogs">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}">All Blogs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('blog-tag.index')}}">Tags</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements-settings" aria-expanded="false" aria-controls="form-elements-settings">
            <i class="ti-settings menu-icon"></i>
            <span class="menu-title">Settings</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements-settings">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}">Profile</a></li>
            </ul>
        </div>
    </li>
    
</ul>