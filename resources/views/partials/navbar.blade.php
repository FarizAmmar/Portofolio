<nav class="navbar navbar-expand-lg bg-transparant">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="#">Fariz <span style="color: #AACB73;">.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-auto justify-content-center mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ $title == 'Works' ? 'active' : '' }} disabled" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Works <span><i class='bx bx-chevron-down toggle-icon'></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'About' ? 'active' : '' }}" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Projects' ? 'active' : '' }}" href="#project">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}" href="#contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-outline-primary">Let's Chat</button>
            </div>
        </div>
    </div>
</nav>