
<div id="site-header" class="hidden-sm hidden-xs hidden-md">
    <nav id="site-menu" class="navbar navbar-default navbar_top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ url('tem') }}/images/logo.png" style="height: 44px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">Chủ đề <i class="fa fa-bars" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">

                        @foreach($cateCourse as $key => $value)
                            <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> {{$value['name']}}</a></li>
                        @endforeach

                        </ul>
                    </li>
                    <li>
                        <form class="navbar-form form-inline" method="GET" action="/search">
                            <div class="form-group">
                                <input name="key" required="" type="text" class="form-control input_search" id="input-title" placeholder="Tìm khoá học bạn quan tâm">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right dropdown navbar_login clearfix navbar_top">
                    <li class="icon-cart top hidden-xs">
                        <a href="#" id="cart">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                            </span>
                            <span class="badge">1</span>
                        </a>
                    </li>
                    <ul class="dropdown-menu-add cart_show hidden-xs">
                        <li><i class="fa fa-check" aria-hidden="true"></i> Thêm vào giỏ hàng thành công!
                            <span class="pull-right close_cart"><i class="fa fa-times" aria-hidden="true"></i></span>
                        </li>
                        <li><br></li>
                        <li class="divider"></li>
                        <li><a href="#" class="btn btn-danger">Xem giỏ hàng và thanh toán </a></li>
                    </ul>
                    <!-- quả chuông khi login mới gọi để check dữ liệu -->
                    <li class="icon-bell top">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Xem tất cả thông báo</a></li>
                        </ul>
                    </li>
                    <!-- user -->
                    <li class="icon-user dropdown-toggle top hidden-xs" data-toggle="dropdown"><a href="#"><span class="fa-stack fa-lg"><img style="border-radius: 50%;width: 37px;height: 37px;" src="https://unica.vn/icon/profile.png" alt=""></span><span class="caret"></span></a></li>
                    <ul class="dropdown-menu hidden-xs">
                        <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-unlock" aria-hidden="true"></i> Kích hoạt khóa học</a></li>
                        <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin cá nhân</a></li>
                        <li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> Khóa học của tôi</a></li>
                        <li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> Trãi nghiệm miễn phí</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="btnDangxuat"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
                    </ul>
                </ul>
                <ul class="nav navbar-nav navbar-right in">
                    <li class="icon-cart top hidden-xs active">
                        <a class="btn-enter-course" title="Khóa học của tôi" href="#"><span><i class="fa fa-sign-out" aria-hidden="true"></i> VÀO HỌC</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="header-mobile hidden-lg">
    <a href="javascript:void(0)" class="header-mobile__left_btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <!-- End box menu -->
    <a data-toggle="collapse" href="#collapsesearch" style="position: absolute;top: 8px;font-size: 22px;display: block;text-align: center;color: #686f7a;left: 50px;z-index: 333;display: -webkit-box;">
        <i class="fa fa-search" aria-hidden="true"></i>
    </a>
    <div class="header-mobile__logo">
        <a href="/"><img src="images/logo.png" alt="LOGO" style="height: 45px;"></a>
    </div>
    <!-- for tablet -->
    <ul class="nav navbar-nav navbar-right dropdown navbar_login clearfix navbar_top hidden-xs">
        <li class="icon-cart top hidden-xs">
            <a href="#" id="cart">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <span class="badge">1</span>
            </a>
        </li>
        <ul class="dropdown-menu-add cart_show hidden-xs">
            <li><i class="fa fa-check" aria-hidden="true"></i> Thêm vào giỏ hàng thành công!
                <span class="pull-right close_cart"><i class="fa fa-times" aria-hidden="true"></i></span>
            </li>
            <li><br></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-danger">Xem giỏ hàng và thanh toán </a></li>
        </ul>
        <!-- quả chuông khi login mới gọi để check dữ liệu -->
        <li class="icon-bell top">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Xem tất cả thông báo</a></li>
            </ul>
        </li>
        <!-- user -->
        <li class="icon-user dropdown-toggle top hidden-xs" data-toggle="dropdown"><a href="#"><span class="fa-stack fa-lg"><img style="border-radius: 50%;width: 37px;height: 37px;" src="https://unica.vn/icon/profile.png" alt=""></span><span class="caret"></span></a></li>
        <ul class="dropdown-menu hidden-xs">
            <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-unlock" aria-hidden="true"></i> Kích hoạt khóa học</a></li>
            <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin cá nhân</a></li>
            <li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> Khóa học của tôi</a></li>
            <li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> Trãi nghiệm miễn phí</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btnDangxuat"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
        </ul>
    </ul>
    <ul class="nav navbar-nav navbar-right in hidden-xs">
        <li class="icon-cart top hidden-xs active">
            <a class="btn-enter-course" title="Khóa học của tôi" href="#"><span><i class="fa fa-sign-out" aria-hidden="true"></i> VÀO HỌC</span></a>
        </li>
    </ul>
    <!-- end table -->
    <!-- for mobile -->
    <a class="visible-xs" href="#" style="width: 25px;height: 25px;position: absolute;top: 9px;font-size: 22px;display: block;text-align: center;color: #686f7a;right: 45px;z-index: 333;display: -webkit-box;">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    </a>
    <div class="dropdown visible-xs pull-right">
        <img style="border-radius:50%;width:30px;height:30px;margin:8px;" src="https://unica.vn/icon/profile.png" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-unlock" aria-hidden="true"></i> Kích hoạt khóa học</a></li>
            <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin cá nhân</a></li>
            <li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> Khóa học của tôi</a></li>
            <li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> Trãi nghiệm miễn phí</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btnDangxuat"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
        </ul>
    </div>
    <!-- for mobile -->
</div>
<div style="background: #fff;border-top: none; left: 0;padding: 5px 15px 0px;position: absolute;right: 0;top: 20px;visibility: visible;z-index: 2;width: 100%;height: 45px !important;margin-top:10px;" id="collapsesearch" class="panel__search panel-collapse collapse">
    <form class="search-form" method="GET" action="" style="position: relative;margin: 25px 0px 10px;">
        <div class="form-group" style="margin-bottom:0px;" style="position: relative;">
            <input name="key" required="" type="text" class="form-control input_search" id="input-title" placeholder="Nhập từ khóa tìm kiếm">
            <button style="height: 34px;background-color: #f68f36;color: #fff;margin-left: 5px;position: absolute;top: 0px;right: 0px" type="submit"  class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </form>
</div>
<div class="panel_left panel_account">
    <div class="panel_header">
        <h4>Chủ đề</h4>
        <span class="close" style="position: absolute;top: 15px;right: 10px;color: #fff !important;opacity: 1;">
            <i class="fa fa-times" aria-hidden="true"></i>
        </span>
    </div>
    <div class="panel_content">
        <div class="main-menu header-profile__info-link">
            <ul class="account__navigation">
            @foreach($cateCourse as $key => $value)
                <li class="account__navigation_item account__navigation_item--dashboard"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> {{$value['name']}}</a></li>
            @endforeach
            </ul>
        </div>
    </div>
    <div class="panel_footer"></div>
</div>