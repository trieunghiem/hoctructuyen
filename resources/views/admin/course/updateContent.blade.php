@extends('admin.partial.layout')
@section('content')
<script src="{{ url('lib/plugin-soanthao/ckeditor/ckeditor.js') }}"></script>
<script src="{{ url('lib/plugin-soanthao/func_ckfinder.js') }}"></script>
<script src="{{ url('lib/js/jquery.form.js') }}"></script>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sliders
        <small>range sliders</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">Sliders</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Thêm Khóa Học</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
                <div class="col-sm-12">

                  <div class="form-group">
                    <label for="nameCourse">Tên Khóa Học</label>
                    <input type="text" class="form-control" id="nameCourse" placeholder="Tên khóa học">
                  </div>
                  <div class="form-group">
                    <label for="aliasCourse">Đường dẫn thân thiện</label>
                    <input type="text" class="form-control" id="aliasCourse" placeholder="Đường dẫn">
                  </div>
                  <div class="form-group">
                    <label for="descriptionCourse">Description</label>
                    <textarea class="form-control" rows="3" id="descriptionCourse" placeholder="Description ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="teacherCourse">Giảng viên</label>
                    <input type="text" class="form-control" id="teacherCourse" placeholder="Giảng viên">
                  </div>
                  <div class="form-group">
                    <label for="fileCourse">File video</label>
                    <input type="file" id="fileCourse">
                  </div>
                  <div class="form-group">
                    <label for="urlVideoCourse">Url video</label>
                    <input type="text" class="form-control" id="urlVideoCourse" placeholder="url video">
                  </div>
                  <div class="form-group row-learn">
                    <div style="display: flex;">
                      <label style="padding-right: 20px;">Bạn sẽ học được gì</label>
                      <button type="button" class="btn btn-info buttonContent" onclick="libAddRowLearn($(this))">Thêm</button>
                    </div>
                    <div class="learn-box">
                      <input type="text" class="form-control">
                      <button type="button" name="learnWhat[]" class="btn btn-danger btn-sm" onclick="libRemoveRowLearn($(this))"><i class="fa fa-trash-o"></i></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Giới thiệu khóa học</label>
                    <textarea rows="3" name="content" id="content"></textarea>
                    <script>
                        jQuery(function($) {
                                ckeditor('content');
                            })
                    </script>
                  </div>
                  <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <span class="btn">
                        <img class="img_prod" src="{{url('lib/images/anh_chinh.PNG')}}" onclick="libImgAnhChinh()" id="anh_chinh" style="width: 120px; height: 120px;">
                        <input type="file" name="file_anh_chinh" id="file_anh_chinh" style="display: none;" onchange="libChangeAnhChinh(this);">
                    </span>
                  </div>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" name="status" value="1">
                    </label>
                    <label>
                      Hiển thị
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Nội Dung Khóa Học</h3>
              <button type="button" class="btn btn-info buttonContent">Thêm Nội Dung</button>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
                <div class="col-sm-12">
                  <div class="content">
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-md-12" style="display: flex;">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="" aria-expanded="true"><i class="fa fa-minus-square" aria-hidden="true"></i> Phần 1: Tổng quan khóa học</a>
                                </h4>
                                <button type="button" class="btn btn-info buttonContent">Sửa</button>
                                <button type="button" class="btn btn-info buttonContent">Thêm Bài Mới</button>
                            </div>
                          </div>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in " aria-expanded="true">
                          <div class="panel-body">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info"> 
                              <tbody>
                                <tr role="row" class="odd">
                                  <td class="sorting_1">Gecko</td>
                                  <td>Firefox 1.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td class="sorting_1">Gecko</td>
                                  <td>Firefox 2.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td class="sorting_1">Gecko</td>
                                  <td>Netscape Browser 8</td>
                                  <td>Win 98SE+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td class="sorting_1">Gecko</td>
                                  <td>Netscape Navigator 9</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td class="sorting_1">Gecko</td>
                                  <td>Mozilla 1.0</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1</td>
                                  <td>A</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection