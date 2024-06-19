<!-- Header YANG DI ATAS  -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; gap: 10px;">
                            <img src="{{ asset('img/logo-web.png') }}" alt="logo" style="border-radius: 3px" width="8%">
                            <li class="font-weight-bold" style="font-size: 1.2em; display: flex; align-items: center;">
                                Selamat Datang {{ Auth::user()->name }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div>
                        </div>
                        <div class="header__top__right__auth">
                            <button class="custom-btn btn-1" style="border-radius: 5px; background-color: #010101; color: #ffffff; border: none; padding: 10px 20px; cursor: pointer; display: inline-block;" onmouseover="this.style.backgroundColor='#ff0000';" onmouseout="this.style.backgroundColor='#010101';" onclick="confirmLogout()">
                                <span class="font-weight-bold" style="font-size: 0.8em; color: inherit; text-decoration: none;">
                                    <i class="fa fa-sign-out-alt"></i> Logout
                                </span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ route('orangtua')}}"><img src="#" alt=""></a>
                </div>
            </div>
    </div>
</header>

<!-- Header End -->
