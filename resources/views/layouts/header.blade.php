<header>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="img-responsive" src="{{asset('assets/images/logo.png')}}" alt="Hajj Umrah Hub">
            </a>
            <div class="whts d-flex d-md-none">
                <a href="https://wa.me/+4407877190363" target="_blank">
                    <img src="{{asset('assets/images/whatsapp.svg')}}" alt="whatsapp">
                    <span class="d-none d-sm-block d-md-none ">07877190363</span>
                </a>
            </div>
            <div class="custom-nav navbar-offcanvas navbar-offcanvas-fade navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li ><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a class="{{ request()->is('cheap-hajj-packages.html') ? 'active' : '' }}" href="{{ route('hajj') }}">Hajj</a></li>
                    <li><a class="{{ request()->is('umrah-visa.html') ? 'active' : '' }}" href="{{ route('umrahVisa') }}">Umrah Visa</a></li>
                    <li class="dropdown"><a class="{{ request()->is('umrah-packages.html') ? 'active' : '' }}"  href="{{ route('umrahPackages') }}">Umrah Package<span class="caret"></span></a> <i class="fa fa-plus"></i>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('umrahPackages') }}" class="">Umrah Packages</a></li>
                            <li><a href="{{ route('umrahPackages2026') }}" class="">Umrah Packages 2026</a></li>
                            <li><a href="{{ route('decemberUmrahPackages') }}" class="">December Umrah</a></li>
                            <li><a href="{{ route('ramadanUmrah') }}" class="">Ramadan Umrah</a></li>
                            <li><a href="{{ route('easterUmrahPackages') }}" class="">Easter Umrah</a></li>
                            <li><a href="{{ route('birminghamUmrah') }}" class="">Birmingham Umrah</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="d-none d-md-block d-xl-none p-0 m-0">
                    <li>
                        <a href="https://wa.me/+4407877190363" target="_blank">
                            <img src="{{asset('assets/images/whatsapp.svg')}}" alt="whatsapp">
                            <span class="d-none d-lg-block ">07877190363</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler offcanvas-toggle" type="button" data-toggle="offcanvas"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
            <div class="extraLinks ml-auto d-none d-xl-block">
                <a class="phone" href="tel:0203 970 0002">0203 970 0002</a>
                <a href="mailto:info@hajjumrahhub.co.uk">
                    <img loading="lazy" height="20" width="30" class="svg" src="{{asset('assets/images/mail.svg')}}" alt="email">info@hajjumrahhub.co.uk
                </a>
            </div>
        </div>
    </nav>
    <!--mobile view button-->
    <div class="mobileButtons d-xl-none">
        <a class="phone" href="tel:0203 970 0002"><img height="28" width="28" class="svg" src="{{asset('assets/images/waving-phone.svg')}}" alt="phone image"></a>
    </div>
    <!--mobile view button-->
</header>