@extends('web.partial.layout')

@section('content')

    @include('web.partial.header')

	<div class="slide">
	    <a title="" href="#">
	        <img src="{{ url('tem') }}/images/052722_du-doan-worldcup-2018-trung-samsung-s9_thumb.jpg" width="100%" alt="">
	    </a>
	</div>
	<div id="main">
	    <div class="container">
	        <div id="block-3" class="list-projects">
	            <ul class="nav nav-tabs" role="tablist">
	                <li id="hot" role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><i class="fa fa-fire" aria-hidden="true"></i> Nổi bật</a></li>
	                <li id="new" role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Mới nhất</a></li>
	                <li id="sale" role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Đang khuyến mại</a></li>
	                <li id="combo" role="presentation"><a href="#">Combo</a></li>
	            </ul>
	            <div class="tab-content">
	                <div class="tab-pane fade active in" role="tabpanel" id="tab1">
						@foreach($highlight as $key => $value)
	                    <div class="row">
	                    	@foreach($value as $k => $val)
	                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                            <div class="col">
	                                <div class="images">
	                                    <a title="" href="#">
	                                        <img class="image" alt="" src="{{asset('storage')}}/{{$val['avatar']}}">
	                                    </a>
	                                    <div class="middle">
	                                        <a title="" href="#"></a>
	                                        <center>
	                                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
	                                        </center>
	                                    </div>
	                                </div>
	                                <div class="title">
	                                    <a title="" href="#"><b>{{$val['name']}}</b></a>
	                                </div>
	                                <div class="price">
	                                    <span class="sell-price">{{number_format($val['price'])}}<sup>đ</sup></span>
	                                    @if($val['old_price'] != 0 && $val['old_price'] != null)
	                                    <span class="old-price">{{number_format($val['old_price'])}}<sup>đ</sup></span>
	                                    {!!\App\Lib\LibSupportViewController::viewPercentPrice($val['price'], $val['old_price'])!!}
	                                    @endif
	                                </div>
	                            </div>
	                        </div>
	                        @endforeach
	                    </div>
	                    @endforeach
	                    <center><a href="#" class="btn btn-danger home_more">XEM THÊM KHÓA HỌC NỔI BẬT KHÁC</a></center>
	                </div>
	                
	                <div class="tab-pane fade" role="tabpane2" id="tab2">
	                    @foreach($latest as $key => $value)
	                    <div class="row">
	                    	@foreach($value as $k => $val)
	                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                            <div class="col">
	                                <div class="images">
	                                    <a title="" href="#">
	                                        <img class="image" alt="" src="{{asset('storage')}}/{{$val['avatar']}}">
	                                    </a>
	                                    <div class="middle">
	                                        <a title="" href="#"></a>
	                                        <center>
	                                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
	                                        </center>
	                                    </div>
	                                </div>
	                                <div class="title">
	                                    <a title="" href="#"><b>{{$val['name']}}</b></a>
	                                </div>
	                                <div class="price">
	                                    <span class="sell-price">{{number_format($val['price'])}}<sup>đ</sup></span>
	                                    @if($val['old_price'] != 0 && $val['old_price'] != null)
	                                    <span class="old-price">{{number_format($val['old_price'])}}<sup>đ</sup></span>
	                                    {!!\App\Lib\LibSupportViewController::viewPercentPrice($val['price'], $val['old_price'])!!}
	                                    @endif
	                                </div>
	                            </div>
	                        </div>
	                        @endforeach
	                    </div>
	                    @endforeach
	                    <center><a href="#" class="btn btn-danger home_more">XEM THÊM KHÓA HỌC MỚI</a></center>
	                </div>
	                <div class="tab-pane fade" role="tabpane3" id="tab4">
	                    @foreach($promotion as $key => $value)
	                    <div class="row">
	                    	@foreach($value as $k => $val)
	                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                            <div class="col">
	                                <div class="images">
	                                    <a title="" href="#">
	                                        <img class="image" alt="" src="{{asset('storage')}}/{{$val['avatar']}}">
	                                    </a>
	                                    <div class="middle">
	                                        <a title="" href="#"></a>
	                                        <center>
	                                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
	                                        </center>
	                                    </div>
	                                </div>
	                                <div class="title">
	                                    <a title="" href="#"><b>{{$val['name']}}</b></a>
	                                </div>
	                                <div class="price">
	                                    <span class="sell-price">{{number_format($val['price'])}}<sup>đ</sup></span>
	                                    @if($val['old_price'] != 0 && $val['old_price'] != null)
	                                    <span class="old-price">{{number_format($val['old_price'])}}<sup>đ</sup></span>
	                                    {!!\App\Lib\LibSupportViewController::viewPercentPrice($val['price'], $val['old_price'])!!}
	                                    @endif
	                                </div>
	                            </div>
	                        </div>
	                        @endforeach
	                    </div>
	                    @endforeach
	                    <center><a href="#" class="btn btn-danger home_more">XEM THÊM KHÓA HỌC ĐANG KHUYẾN MẠI</a></center>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-11 col-sm-10 col-xs-12">
	                <h5><b>Combo khóa học</b> nổi bật</h5>
	            </div>
	            <div class="col-md-1 col-sm-2 col-xs-12 padding-left-0">
	                <a class="btn" href="#">Xem tất cả <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	            </div>
	        </div>
	        <div class="list-projects">
	            <div class="row">
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-11 col-sm-10 col-xs-12">
	                <h5>Khóa học <b>Ngoại ngữ</b> nổi bật</h5>
	            </div>
	            <div class="col-md-1 col-sm-2 col-xs-12 padding-left-0">
	                <a class="btn" href="#">Xem tất cả <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	            </div>
	        </div>
	        <div class="list-projects">
	            <div class="row">
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-11 col-sm-10 col-xs-12">
	                <h5>Khóa học <b>Kinh doanh - Khởi nghiệp</b> nổi bật</h5>
	            </div>
	            <div class="col-md-1 col-sm-2 col-xs-12 padding-left-0">
	                <a class="btn" href="#">Xem tất cả <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	            </div>
	        </div>
	        <div class="list-projects">
	            <div class="row">
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-11 col-sm-10 col-xs-12">
	                <h5>Khóa học <b>Sale - Marketing</b> nổi bật</h5>
	            </div>
	            <div class="col-md-1 col-sm-2 col-xs-12 padding-left-0">
	                <a class="btn" href="#">Xem tất cả <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	            </div>
	        </div>
	        <div class="list-projects">
	            <div class="row">
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 item_course">
	                    <div class="col">
	                        <div class="images">
	                            <a title="" href="#">
	                                <img class="image" alt="" src="images/_kiem-tien-affiliate-hieu-qua_thumb.jpg">
	                            </a>
	                            <div class="middle">
	                                <a title="" href="#"></a>
	                                <a class="btn btn-info" href="#">Xem chi tiết </a>
	                            </div>
	                        </div>
	                        <div class="title"><a title="" href="#"><b>Kiếm tiền Affiliate hiệu quả</b></a></div>
	                        <div class="teacher">
	                            <span class="text-1">Bao gồm 4 khóa học</span>
	                            <span class="text-2"></span>
	                        </div>
	                        <div class="price">
	                            <span class="sell-price">800,000 <sup>đ</sup>&nbsp;&nbsp;</span>
	                            <span class="old-price">4,200,000<sup>đ</sup></span>
	                            <span class="discount person">- 81%</span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <center><a href="#" class="btn btn-danger">XEM NHIỀU KHÓA HỌC KHÁC</a></center>
	        <div id="tag_hots">
	            <div class="container">
	                <center><h3><b>Chinh phục những mục tiêu của bạn</b></h3></center>
	                <div class="row">
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Nuôi dạy con ngoan, tự lập</a></div>
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Có cơ thể khỏe mạnh, săn chắc</a></div>
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Làm chủ một nhạc cụ mới</a></div>
	                </div>
	                <div class="row">
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Chinh phục tình yêu của bạn</a></div>
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Xây dựng hệ thống marketing tự động</a></div>
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Tăng doanh số bán hàng</a></div>
	                </div>
	                <div class="row">
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Tự học Tiếng Anh tại nhà</a></div>
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Có dòng tiền thu nhập thụ động</a></div>
	                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 tag_item"><a href="#">Làm chủ một ngôn ngữ lập trình</a></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div id="page-bottom">
	    <div class="container">
	        <div id="block-4" class="taisao">
	            <h2 class="block-title">Tại sao bạn nên học cùng Unica?</h2>
	            <div class="content">
	                <div class="row">
	                    <div class="col-sm-3 col-xs-6">
	                        <div class="col first">
	                            <div class="/media/images_v2017"><img src="images/taisao1.png"></div>
	                            <div class="title">Học trực tuyến</div>
	                            <div class="desc">mọi lúc, mọi nơi</div>
	                        </div>
	                    </div>
	                    <div class="col-sm-3 col-xs-6">
	                        <div class="col second">
	                            <div class="/media/images_v2017"><img src="images/taisao2.png"></div>
	                            <div class="title">Hoàn tiền</div>
	                            <div class="desc">nếu không hài lòng</div>
	                        </div>
	                    </div>
	                    <div class="col-sm-3 col-xs-6">
	                        <div class="col third">
	                            <div class="/media/images_v2017"><img src="images/taisao3.png"></div>
	                            <div class="title">Thanh toán 1 lần</div>
	                            <div class="desc">học mãi mãi</div>
	                        </div>
	                    </div>
	                    <div class="col-sm-3 col-xs-6">
	                        <div class="col last">
	                            <div class="/media/images_v2017"><img src="images/taisao4.png"></div>
	                            <div class="title">Giao miễn phí</div>
	                            <div class="desc">khóa học tới tận nhà</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<a title="Đăng ký trở thành Giảng viên" href="#"><img width="100%" src="images/bg2-min.jpg"></a>

	  @include('web.partial.footer')

@endsection