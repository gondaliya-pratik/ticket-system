<!--HEADER DESKTOP-->
<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="{{url('/')}}" style="color: white; text-decoration: none;">
                    <h2>Ticket System</h2>
                </a>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    @if (Auth::check())
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="{{URL::asset('/images/icon/default-avatar.jpg')}}" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="javascript:void(0)">{{Auth::user()->name}}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="javascript:void(0)">
                                        <img src="{{URL::asset('/images/icon/default-avatar.jpg')}}" alt="{{Auth::user()->name}}" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="javascript:void(0)">{{Auth::user()->name}}</a>
                                    </h5>
                                    <span class="email">{{Auth::user()->email}}</span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="{{url('/logout')}}">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER DESKTOP-->
