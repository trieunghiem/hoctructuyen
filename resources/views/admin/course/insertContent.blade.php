
@extends('admin.partial.layout')

@section('content')

<script src="{{ url('lib/plugin-soanthao/ckeditor/ckeditor.js') }}"></script>
<script src="{{ url('lib/plugin-soanthao/func_ckfinder.js') }}"></script>
<script src="{{ url('lib/js/jquery.form.js') }}"></script>

<script src="{{ url('js/app/admin/course/lib.js') }}"></script>

  <div class="content-wrapper">

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
            <form method="post" name="" id="formCourse" enctype="multipart/form-data" action="{{route('postSaveCourse')}}">
              <div class="box-body">
                <div class="row margin">
                  <div class="col-sm-12">

                    <div class="form-group">
                      <label for="nameCourse">Tên Khóa Học</label>
                      <input type="text" name="name" class="form-control" id="nameCourse" placeholder="Tên khóa học" onkeyup="changeTitle($(this).val(), '#aliasCourse')">
                      <input type="hidden" name="id" id="courseId">
                    </div>

                    <div class="form-group">
                      <label for="aliasCourse">Đường dẫn thân thiện</label>
                      <input type="text" name="alias" class="form-control" id="aliasCourse" placeholder="Đường dẫn">
                    </div>

                    <div class="form-group">
                      <label for="descriptionCourse">Description</label>
                      <textarea class="form-control" name="description" rows="3" id="descriptionCourse" placeholder="Description ..."></textarea>
                    </div>

                    <div class="form-group">
                      <label for="teacherCourse">Giảng viên</label>
                      <input type="text" name="teacher" class="form-control" id="teacherCourse" placeholder="Giảng viên">
                    </div>

                    <div class="form-group">
                      <label>Danh Mục</label>
                      <select name="category" id="categoryCourse" onchange="" aria-controls="example1" class="form-control input-sm">
                        <option value="0">chọn danh mục</option>
                      @foreach($cateCourse as $key => $val)
                        <option value="{{$val['id']}}">{{$val['name']}}</option>
                      @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="fileCourse">File video</label>
                      <input type="file" name="path_file_video" id="fileCourse">
                    </div>

                    <div class="form-group">
                      <label for="urlVideoCourse">Url video</label>
                      <input type="text" name="url_video" class="form-control" id="urlVideoCourse" placeholder="url video">
                    </div>

                    <div class="form-group row-learn">
                      <div style="display: flex;">
                        <label style="padding-right: 20px;">Bạn sẽ học được gì</label>
                        <button type="button" class="btn btn-info buttonContent" onclick="libAddRowLearn($(this))">Thêm</button>
                      </div>
                      <div class="learn-box">
                        <input type="text" name="learn_what[]" class="form-control">
                        <button type="button" class="btn btn-danger btn-sm" onclick="libRemoveRowLearn($(this))"><i class="fa fa-trash-o"></i></button>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="priceCourse">Giá</label>
                      <input type="number" name="price" class="form-control" id="priceCourse">
                    </div>

                    <div class="form-group">
                      <label for="oldPriceCourse">Giá cũ (nếu có)</label>
                      <input type="number" name="old_price" class="form-control" id="oldPriceCourse">
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
                          <input type="file" name="avatar" id="file_anh_chinh" style="display: none;" onchange="libChangeAnhChinh(this);">
                      </span>
                    </div>

                    <div class="form-group">
                      <label>
                        Hiển thị
                      </label>
                        <input type="checkbox" name="status" data-toggle="toggle" data-onstyle="success" data-size="small">
                    </div>
        
                  </div>
                </div>
              </div>
            </form>
            <div class="box-footer">
              <button type="button" class="btn btn-primary" onclick="submitFormCourse()">Lưu</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>




@endsection