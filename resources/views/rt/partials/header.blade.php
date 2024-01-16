<nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top bg-dark" id="navbar">
            <div class="container ">
                <a class="navbar-brand" href="/rt">
                    <img src="/assets/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="17">
                    <img src="/assets/images/logo-light.png" class="card-logo card-logo-light" alt="logo light"
                         height="17">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-15 active" href="/rt">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15 active" href="./#wallet">Konten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15 active" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="/logout" method="post" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>