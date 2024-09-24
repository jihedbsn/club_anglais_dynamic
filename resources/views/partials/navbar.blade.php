<div class="main-responsive-nav">
    <div class="container">
        <div class="main-responsive-menu">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <div class="logo-container">
                        <h1 class="ca-logo"><span class="ca-logo-club">Club</span><span
                                class="ca-logo-anglais">Anglais</span>
                        </h1>
                        <div class="catchphrase">
                            <span>Work Hard</span>
                            <span>Play Hard</span>
                            <span>Learn English</span>
                            <span>Have Fun</span>
                        </div>
                    </div>

                    {{-- <img src="{{ asset('assets/img/logo.png') }}" class="black-logo" alt="image">
                    <img src="{{ asset('assets/img/logo.png') }}" class="white-logo" alt="image"> --}}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main-navbar">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="logo-container">
                    <h1 class="ca-logo"><span class="ca-logo-club">Club</span><span
                            class="ca-logo-anglais">Anglais</span>
                    </h1>
                    <div class="catchphrase">
                        <span>Work Hard</span>
                        <span>Play Hard</span>
                        <span>Learn English</span>
                        <span>Have Fun</span>
                    </div>
                </div>

                {{-- <img src="{{ asset('assets/img/logo.png') }}" class="black-logo" alt="image">
                <img src="{{ asset('assets/img/logo-2.png') }}" class="white-logo" alt="image"> --}}
            </a>

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            Preschool Programs
                            <i class='bx bx-chevron-down'></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ url('/pk1') }}" class="nav-link">
                                    PK 1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/pk2') }}" class="nav-link">
                                    PK 2
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/pk3') }}" class="nav-link">
                                    PK 3
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/pk4') }}" class="nav-link">
                                    PK 4
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">
                            Our clubs
                            <i class='bx bx-chevron-down'></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ url('/preschool-club') }}" class="nav-link">
                                    Preschool club
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/adventure-club') }}" class="nav-link">
                                    Adventure club
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">
                            Our camps
                            <i class='bx bx-chevron-down'></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ url('/summer-camp') }}" class="nav-link">
                                    Power camp
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/preschool-camp') }}" class="nav-link">
                                    Preschool summer camp
                                </a>
                            </li>

                        </ul>
                    </li>


                    {{-- <li class="nav-item">
                        <a href="{{ url('/blog') }}" class="nav-link">Blog</a>
                    </li> --}}
                </ul>

                <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                        <a href="{{ url('/contact') }}" class="default-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
