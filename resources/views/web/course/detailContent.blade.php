@extends('web.partial.layout')

@section('content')

    @include('web.partial.header')

	
	<link rel="stylesheet" href="css/dev/main.css">
	<link href="css/dev/bootstrap-select.min.css" rel="stylesheet">
	<div id="highlight" data-spy="affix" data-offset-top="320" class="affix-top">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-8">
	                <h1 class="page-header">{{$course->name}}</h1>
	                <div class="desc">{{$course->description}}</div>
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
								@foreach($course->learn_what as $key => $value)
	                            <div class="row">
	                            	@foreach($value as $k => $val)
	                                <div class="col-sm-6">
	                                    <div class="title">{{$val}}</div>
	                                </div>
	                                @endforeach
	                            </div>
	                            @endforeach
	                        </div>
	                    </div>
	                    <div id="block-9" class="block learning3">
	                        <h2 class="block-title">Giới thiệu khóa học</h2>
	                        <div class="content">
	                            {!!$course->content!!}
	                        </div>
	                    </div>
	                    <div id="block-11" class="block detail-project">
	                        <h2 class="block-title">Nội dung khóa học</h2>
	                        <div class="content">
	                            <div class="panel-group" id="accordion">
	                                @foreach($chapter as $key => $value)
	                                <div class="panel panel-default">
	                                    <!-- phần -->
	                                    <div class="panel-heading">
	                                        <div class="row">
	                                            <div class="col-md-12">
	                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$value->id}}" class="" aria-expanded="true"><i class="fa fa-minus-square" aria-hidden="true"></i> {{$value->name}}</a></h4>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- bài -->
	                                    <div id="collapse{{$value->id}}" class="panel-collapse collapse in " aria-expanded="true">
	                                        <div class="panel-body">
	                                        	@foreach($value->content as $k => $val)
	                                            <div class="col">
	                                                <div class="container-fluid">
	                                                    <div class="row">
	                                                        <div class="col-xs-5 col-md-8">
	                                                            <div class="title">
	                                                            	<a href="#">
	                                                            		<i class="fa fa-play-circle" aria-hidden="true"></i>
	                                                            		{{$val->name}}
	                                                            	</a>
	                                                        	</div>
	                                                        </div>
	                                                        <div class="col-xs-4 col-md-2">
	                                                            <div class="link">
	                                                                &nbsp;
	                                                                <a class="btn-preview" href="javascript:void(0)" onclick="preview_freetrial(568);">Học thử</a>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-xs-3 col-md-2">
	                                                            <div class="time">{{$val->time}}</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            @endforeach
	                                        </div>
	                                    </div>
	                                </div>
	                                @endforeach
	                                
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div id="block-10" class="block other-projects">
	                        <h2 style="margin-left: 15px !important;" class="block-title">Các khóa học liên quan</h2>
	                        <div class="fullwidth list-projects">
	                            <div class="clearfix">
	                            	@foreach($otherCourse as $key => $value)
	                                <div class="col-md-3 col-lg-3 col-sm-6 ">
	                                    <div class="col">
	                                        <div class="images">
	                                            <a title="" href="#">
	                                                <img class="image" alt="" src="{{asset('storage')}}/{{$value->avatar}}">
	                                            </a>
	                                        </div>
	                                        <div class="title"><a title="" href="#"><b>{{$value->name}}</b></a></div>
	                                        
	                                        <div class="price">
	                                            <span class="sell-price">{{number_format($value->price)}}<sup>đ</sup></span>
												@if($value->old_price != 0 && $value->old_price != null)
	                                            <span class="old-price">{{number_format($value->old_price)}}<sup>đ</sup></span>
												@endif
	                                        </div>
	                                    </div>
	                                </div>
	                                @endforeach
	                                
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