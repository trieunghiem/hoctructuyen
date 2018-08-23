
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

                  <div class="form-group">
                    <div style="display: flex;">
                      <label style="padding-right: 20px;">Bạn sẽ học được gì</label>
                      <button type="button" class="btn btn-info">Thêm</button>
                    </div>
                    <br>
                    <div style="display: flex;">
                      <input type="text" class="form-control">
                      <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </div>
                    <br>
                    
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
                        <img class="img_prod" src="{{url('lib/images/anh_chinh.png')}}" id="anh_chinh" style="width: 120px; height: 120px;">
                        <input type="file" name="file_anh_chinh" id="file_anh_chinh" style="display: none;" onchange="changeAnhChinh(this);">
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
                            <div class="col-md-12">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="" aria-expanded="true"><i class="fa fa-minus-square" aria-hidden="true"></i> Phần 1: Tổng quan khóa học</a>
                                </h4>
                            </div>
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


  <script type="text/javascript">
    $("#anh_chinh").click(function () {

      $("#file_anh_chinh").click();
      
    });
  </script>

  <script type="text/javascript">
    function changeAnhChinh(input){

      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $("#anh_chinh").attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
          $("#anh_chinh").show();
      }
      else {
          $("#anh_chinh").attr('src', input.value);
          $("#anh_chinh").show();
      }
    }
  </script>

@endsection