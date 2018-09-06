@extends('web.partial.layout')

@section('content')

    @include('web.partial.header')

	
	<link rel="stylesheet" href="css/dev/main.css">
	<link href="css/dev/bootstrap-select.min.css" rel="stylesheet">
	<div id="highlight" data-spy="affix" data-offset-top="320" class="affix-top">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-8">
	                <h1 class="page-header">Facebook Marketing từ A - Z </h1>
	                <div class="desc">Trọn bộ khoá học facebook marketing từ a-z hướng dẫn chuyên sâu về quảng cáo facebook giúp bạn có các chiến lược facebook marketing hoàn hảo - tự chạy quảng cáo chuyên nghiệp.</div>
	                <div class="star star_yellow">
	                    <ul class="item-list" style="color: yellow;">
	                        <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                        <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                        <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                        <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                        <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                    </ul>
	                    <span class="title">441 đánh giá - 8272 học viên </span>
	                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div id="main detail_course">
	    <div class="container">
	        <div class="row">
	            <div class="video_detail visible-xs">
	                <iframe src="https://www.youtube.com/embed/gCu3loc58O4?rel=0&amp;showinfo=0" width="100%" height="auto" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
	            </div>
	            <div class="col-sm-8">
	                <div id="main-content">
	                    <div id="mobile-light" class="hidden-sm hidden-md hidden-lg">
	                        <!-- mobile -->
	                        <div id="block-14" class="video">
	                            <div class="content">
	                                <div class="video-container hidden-xs"><iframe src="https://www.youtube.com/embed/gCu3loc58O4?rel=0&amp;showinfo=0" width="100%" height="auto" scrolling="no" frameborder="0" allowfullscreen=""></iframe></div>
	                            </div>
	                        </div>
	                        <style type="text/css">
	                            /* count down*/
	                            ul.countdown {
	                                list-style: none;
	                                margin: 0;
	                                padding: 0;
	                                display: block;
	                                text-align: center;
	                                border: 1px solid #ccc;
	                                /*width: 202px;*/
	                                width: 100%;
	                                margin-top:10px;
	                            }
	                            ul.countdown li { display: inline-block;padding: 10px 0px; }
	                            ul.countdown li span {
	                                font-size: 20px;
	                                font-weight: bold;
	                                color: #464646;
	                                padding: 0px 12px;
	                            }
	                            ul.countdown li p {
	                                color: #222223;
	                                font-size: 14px;
	                            }
	                            /* end countdown*/
	                        </style>
	                        <center>
	                            <h4>Thời gian ưu đãi còn</h4>
	                        </center>
	                        <ul class="countdown">
	                            <li><span style="color:#bd2626;" class="days">00</span>
	                                <p class="days_ref">ngày</p>
	                            </li>
	                            <li><span class="hours">14</span>
	                                <p class="hours_ref">giờ</p>
	                            </li>
	                            <li><span class="minutes">38</span>
	                                <p class="minutes_ref">phút</p>
	                            </li>
	                            <li><span class="seconds last">11</span>
	                                <p class="seconds_ref">giây</p>
	                            </li>
	                        </ul>
	                        <script type="text/javascript" src="js/jquery.downCount.js"></script>
	                        <script type="text/javascript">
	                            $(document).ready(function () {
	                                $('.countdown').downCount({
	                                    date: '07/06/2018 00:00:00',
	                                    offset: +7 // vn múi giờ +7
	                                });
	                            });
	                        </script>
	                        <div id="block-15" class="block-cart ">
	                            <div class="price"><span class="sell-price">599,000<sup>đ</sup></span><span class="old-price">700,000<sup>đ</sup></span><span class="discount">-14%</span></div>
	                            <div class="link link1"><a course_id="hWDi7CFNGizLc7IN7AhGcA%3D%3D" href="https://unica.vn/order/step1?id=34"> Đăng ký học ➔</a></div>
	                            <div class="link link2"><a href="javascript:void(0)" id="add_cart_mobile">Thêm vào giỏ hàng</a></div>
	                            <div class="desc">
	                                <ul class="item-list">
	                                    <li><i class="fa fa-play-circle" aria-hidden="true"></i><b>64</b> bài giảng</li>
	                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> 06 giờ 22 phút</li>
	                                    <li><i class="fa fa-sign-in" aria-hidden="true"></i>Mua 1 lần học trọn đời</li>
	                                    <li><i class="fa fa-mobile" aria-hidden="true"></i>Truy cập trên thiết bị di động</li>
	                                </ul>
	                            </div>
	                            <div class="coupon">
	                                <a href="javascript:void(0)" class="icon-user dropdown-coupon">Bạn có mã coupon giảm giá?</a>&nbsp;
	                                <span style="display: none" class="error_message label label-danger">Coupon không hợp lệ</span>
	                                <div class="col-sm-12 dropdown-input-coupon" style="display: none;">
	                                    <div class="col-lg-8">
	                                        <div class="form-group"><input name="coupon_code" required="" type="text" class="form-control" id="coupon_code_mb" placeholder="Nhập mã giảm giá"></div>
	                                    </div>
	                                    <div class="col-lg-2">
	                                        <div class="form-group"><button onclick="submit_coupon()" type="button" class="coupon-submit btn btn-success">Hoàn thành</button></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div id="block-6" class="block learning" style="margin-top: 5px;">
	                        <h2 class="block-title">Bạn sẽ học được gì?</h2>
	                        <div class="content">
	                            <div class="row">
	                                <div class="col-sm-6">
	                                    <div class="title">Hiểu rõ bản chất quảng cáo facebook</div>
	                                </div>
	                                <div class="col-sm-6">
	                                    <div class="title">Xây dựng kế hoạch quảng cáo Facebook hiệu quả</div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-sm-6">
	                                    <div class="title">Sử dụng thành thạo các công cụ hỗ trợ quảng cáo facebook</div>
	                                </div>
	                                <div class="col-sm-6">
	                                    <div class="title">Tiết kiệm chi phí nhưng vẫn mang lại lợi nhuận cao</div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-sm-6">
	                                    <div class="title">Sáng tạo, xây dựng hình ảnh, nội dung thu hút, có tính tương tác cao</div>
	                                </div>
	                                <div class="col-sm-6">
	                                    <div class="title">Áp dụng ngay các thủ thuật tối ưu Facebook Ads ngay trong quá trình học.</div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-sm-6">
	                                    <div class="title"></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div id="block-7" class="block learning2">
	                        <h2 class="block-title">Đối tượng đào tạo</h2>
	                        <div class="content">
	                            <ul class="item-list">
	                                <li>Chủ doanh nghiệp</li>
	                                <li>Cá nhân kinh doanh</li>
	                                <li>Nhân viên Marketing Online</li>
	                                <li>Tất cả những người yêu thích kinh doanh trên Facebook</li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div id="block-9" class="block learning3">
	                        <h2 class="block-title">Giới thiệu khóa học</h2>
	                        <div class="content">
	                            <p>Facebook hiện đang là mạng xã hội với lượng người dùng lên hơn 60.000.000 người tại Việt Nam và ngày càng có chiều hướng gia tăng. Chính vì vậy, tất cả các nhãn hàng nổi tiếng mà bạn biết tên, thậm chí cả những nhãn hàng nhỏ, những shop thời trang trên phố lớn và cả những quán ăn vỉa hè trong ngõ nhỏ đều xuất hiện trên Facebook. Vậy tại sao bạn và doanh nghiệp của bạn có thể đứng ngoài “cuộc chơi lớn” với vô vàn những cơ hội nếu biết tận dụng này?</p>
	                            <p> Facebook Marketing - khó mà dễ. Facebook là thị trường lớn với vô vàn khách hàng đủ mọi giới tính, sở thích, ngành nghề và tiếp xúc nhanh chóng với hàng trăm thương hiệu, hàng nghìn sản phẩm khác nhau ngay sau khi đăng nhập. Vậy làm sao để bạn nhanh chóng tiếp cận đúng khách hàng mục tiêu và khiến họ nhanh chóng đưa ra quyết định mua hàng?</p>
	                            <p>Khóa học <strong><em>Facebook Marketing từ A - Z</em></strong> sẽ giải quyết toàn bộ vướng mắc cho bạn và doanh nghiệp của bạn khi dùng Facebook như 1 “chợ thương mại” - Dù là việc chọn sản phẩm, sáng tạo nội dung hình ảnh gắn với sản phẩm cho đến việc giải quyết khi tài khoản gặp vấn đề và xây dựng chiến dịch quảng trên Facebook thế nào cho hiệu quả bằng những công cụ hỗ trợ tối ưu toàn diện.</p>
	                        </div>
	                    </div>
	                    <div id="block-11" class="block detail-project">
	                        <h2 class="block-title">Nội dung khóa học</h2>
	                        <div class="content">
	                            <div class="panel-group" id="accordion">
	                                <div class="panel panel-default">
	                                    <!-- phần -->
	                                    <div class="panel-heading">
	                                        <div class="row">
	                                            <div class="col-md-12">
	                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="" aria-expanded="true"><i class="fa fa-minus-square" aria-hidden="true"></i> Phần 1: Tổng quan về Facebook</a></h4>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- bài -->
	                                    <div id="collapse1" class="panel-collapse collapse in " aria-expanded="true">
	                                        <div class="panel-body">
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 1: Ưu điểm và nhược điểm của Quảng cáo Facebook</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:03:01</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 2: Các kỹ năng cần thiết cần cho Quảng cáo Facebook</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:01:44</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 3: Sản phẩm nào là phù hợp để chạy Quảng cáo Facebook</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:01:16</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 4: Chuẩn bị gì để chạy Quảng cáo Facebook</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:00:42</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <!-- phần -->
	                                    <div class="panel-heading">
	                                        <div class="row">
	                                            <div class="col-md-12">
	                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="" aria-expanded="true"><i class="fa fa-minus-square" aria-hidden="true"></i> Phần 2: Xây dựng và phát triển Fanpage</a></h4>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- bài -->
	                                    <div id="collapse2" class="panel-collapse collapse in " aria-expanded="true">
	                                        <div class="panel-body">
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 5: Cách chọn tên Page</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(568);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:04:53</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 6: Cách tạo page</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(17407);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:06:48</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 7: Cấu hình thông tin cơ bản</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(17408);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:03:34</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 8: Vai trò trên Page    </a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(569);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:04:18</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 9: Cửa hàng trên Page</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(560);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:07:05</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 10: Gắn thẻ sản phẩm vào bài viết</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(3851);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:03:10</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 11: Đăng bài ẩn đối thủ</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(561);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:03:45</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 12: Page vệ tinh</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(563);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:06:11</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 13: Phân Tích - Đánh giá Page   </a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(564);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:06:32</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 14: Các cài đặt cơ bản trên Page</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(565);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:04:07</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 15: Cài đặt tin nhắn tự động trên page</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(566);">Học thử</a></div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:05:22</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <!-- phần -->
	                                    <div class="panel-heading">
	                                        <div class="row">
	                                            <div class="col-md-12">
	                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="" aria-expanded="true"><i class="fa fa-minus-square" aria-hidden="true"></i> Phần 3: Các dạng quảng cáo cơ bản trên Facebook</a></h4>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- bài -->
	                                    <div id="collapse3" class="panel-collapse collapse in " aria-expanded="true">
	                                        <div class="panel-body">
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 16: Quảng cáo định dạng quay vòng</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:03:38</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 17: Quảng cáo trình chiếu video</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:03:35</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 18: Quảng cáo Canvas</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:07:06</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 19: Quảng cáo sự kiện</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:03:08</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 20: Quảng cáo ưu đãi Coupon</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:05:03</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 21: Quảng cáo album</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:05:13</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title"><a href="#"><i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                                Bài 22: Quảng cáo tìm kiếm khách hàng tiềm năng</a></div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">00:06:56</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div id="block-10" class="block other-projects">
	                        <h2 style="margin-left: 15px !important;" class="block-title">Các khóa học liên quan</h2>
	                        <div class="fullwidth list-projects">
	                            <div class="clearfix">
	                                <div class="col-md-3 col-lg-3 col-sm-6 ">
	                                    <div class="col">
	                                        <div class="images">
	                                            <a title="" href="#">
	                                                <img class="image" alt="" src="images/Biquyetchot_don_m.jpg">
	                                            </a>
	                                        </div>
	                                        <div class="title"><a title="" href="#"><b>Bí quyết chốt đơn thành công 90% - Telesale, Bán hàng online</b></a></div>
	                                        <div class="star">
	                                            <p><a href="#">Phan Duy Khánh </a></p>
	                                            <p></p>
	                                            <ul class="item-list">
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_ghi"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                            </ul>
	                                            <p></p>
	                                        </div>
	                                        <div class="price">
	                                            <span class="sell-price">449,000<sup>đ</sup></span><span class="old-price">500,000<sup>đ</sup></span>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-3 col-lg-3 col-sm-6 ">
	                                    <div class="col">
	                                        <div class="images">
	                                            <a title="" href="#">
	                                                <img class="image" alt="" src="images/Biquyetchot_don_m.jpg">
	                                            </a>
	                                        </div>
	                                        <div class="title"><a title="" href="#"><b>Bí quyết chốt đơn thành công 90% - Telesale, Bán hàng online</b></a></div>
	                                        <div class="star">
	                                            <p><a href="#">Phan Duy Khánh </a></p>
	                                            <p></p>
	                                            <ul class="item-list">
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_ghi"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                            </ul>
	                                            <p></p>
	                                        </div>
	                                        <div class="price">
	                                            <span class="sell-price">449,000<sup>đ</sup></span><span class="old-price">500,000<sup>đ</sup></span>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-3 col-lg-3 col-sm-6 ">
	                                    <div class="col">
	                                        <div class="images">
	                                            <a title="" href="#">
	                                                <img class="image" alt="" src="images/Biquyetchot_don_m.jpg">
	                                            </a>
	                                        </div>
	                                        <div class="title"><a title="" href="#"><b>Bí quyết chốt đơn thành công 90% - Telesale, Bán hàng online</b></a></div>
	                                        <div class="star">
	                                            <p><a href="#">Phan Duy Khánh </a></p>
	                                            <p></p>
	                                            <ul class="item-list">
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_ghi"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                            </ul>
	                                            <p></p>
	                                        </div>
	                                        <div class="price">
	                                            <span class="sell-price">449,000<sup>đ</sup></span><span class="old-price">500,000<sup>đ</sup></span>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-3 col-lg-3 col-sm-6 ">
	                                    <div class="col">
	                                        <div class="images">
	                                            <a title="" href="#">
	                                                <img class="image" alt="" src="images/Biquyetchot_don_m.jpg">
	                                            </a>
	                                        </div>
	                                        <div class="title"><a title="" href="#"><b>Bí quyết chốt đơn thành công 90% - Telesale, Bán hàng online</b></a></div>
	                                        <div class="star">
	                                            <p><a href="#">Phan Duy Khánh </a></p>
	                                            <p></p>
	                                            <ul class="item-list">
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_yellow"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                                <li class="color_ghi"><i class="fa fa-star" aria-hidden="true"></i></li>
	                                            </ul>
	                                            <p></p>
	                                        </div>
	                                        <div class="price">
	                                            <span class="sell-price">449,000<sup>đ</sup></span><span class="old-price">500,000<sup>đ</sup></span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>  
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-sm-4 hidden-xs">
	                <div id="sidebar-right" data-spy="affix" data-offset-top="320" class="affix-top">
	                    <div id="block-14" class="video hidden-xs">
	                        <div class="content">
	                            <div data-toggle="modal" data-target="#myModal" class="video-container wrapper_youtube_detail">
	                                <i class="fa fa-youtube-play fa-4" aria-hidden="true"></i>
	                                <img style="opacity: 0.6;" class="thumb" src="images/facebook-az_m.png" width="100%" alt="">
	                            </div>
	                        </div>
	                    </div>
	                    <center><h4>Thời gian ưu đãi còn</h4></center>
	                    <ul class="countdown">
	                        <li><span style="color:#bd2626;" class="days">00</span>
	                            <p class="days_ref">ngày</p>
	                        </li>
	                        <li><span class="hours">13</span>
	                            <p class="hours_ref">giờ</p>
	                        </li>
	                        <li><span class="minutes">41</span>
	                            <p class="minutes_ref">phút</p>
	                        </li>
	                        <li><span class="seconds last">57</span>
	                            <p class="seconds_ref">giây</p>
	                        </li>
	                    </ul>
	                    <div id="block-15" class="block-cart ">
	                        <div class="price">
	                            <span class="sell-price">599,000<sup>đ</sup></span>
	                            <span class="old-price">700,000<sup>đ</sup></span>
	                            <span class="discount">-14%</span>
	                        </div>
	                        <div class="link link1">
	                            <a course_id="" href="#"> Đăng ký học ➔</a>
	                        </div>
	                        <div class="link link2"><a href="javascript:void(0)" id="add_cart">Thêm vào giỏ hàng</a></div>
	                        <div class="desc">
	                            <ul class="item-list">
	                                <li><i class="fa fa-play-circle" aria-hidden="true"></i><b>64</b> bài giảng</li>
	                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 06 giờ 22 phút</li>
	                                <li><i class="fa fa-sign-in" aria-hidden="true"></i>Mua 1 lần học trọn đời</li>
	                                <li><i class="fa fa-mobile" aria-hidden="true"></i>Truy cập trên thiết bị di động</li>
	                            </ul>
	                        </div>
	                        <div class="coupon">
	                            <a href="javascript:void(0)" class="icon-user dropdown-coupon">Bạn có mã coupon giảm giá?</a> &nbsp;
	                            <span style="display: none" class="error_message label label-danger">Coupon không hợp lệ</span>
	                            <div class="col-sm-12 dropdown-input-coupon" style="display: none;">
	                                <div class="col-lg-8">
	                                    <div class="form-group"><input name="coupon_code" required="" type="text" class="form-control" id="coupon_code" placeholder="Nhập mã giảm giá..."></div>
	                                </div>
	                                <div class="col-lg-2">
	                                    <div class="form-group">
	                                        <button onclick="submit_coupon()" type="button" class="coupon-submit btn btn-success">Hoàn thành</button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	@include('web.partial.footer')

@endsection