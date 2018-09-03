@extends('admin.partial.layout')
@section('content')
<script src="{{ url('lib/plugin-soanthao/ckeditor/ckeditor.js') }}"></script>
<script src="{{ url('lib/plugin-soanthao/func_ckfinder.js') }}"></script>
<script src="{{ url('lib/js/jquery.form.js') }}"></script>

<script src="{{ url('js/app/admin/course/lib.js') }}"></script>
<script src="{{ url('js/app/admin/course/updateContent.js') }}"></script>

  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Cập Nhật Khóa Học</h3>
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
                      <input type="text" name="name" class="form-control" id="nameCourse" placeholder="Tên khóa học" onkeyup="changeTitle($(this).val(), '#aliasCourse')" value="{{$course->name}}">
                      <input type="hidden" name="id" id="courseId" value="{{$course->id}}">
                    </div>

                    <div class="form-group">
                      <label for="aliasCourse">Đường dẫn thân thiện</label>
                      <input type="text" name="alias" class="form-control" id="aliasCourse" placeholder="Đường dẫn" value="{{$course->alias}}">
                    </div>


                    <div class="form-group">
                      <label for="descriptionCourse">Description</label>
                      <textarea class="form-control" name="description" rows="3" id="descriptionCourse" placeholder="Description ...">{{$course->description}}</textarea>
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
                        @if($course->category == $val['id'])
                        <option value="{{$val['id']}}" selected>{{$val['name']}}</option>
                        @else
                        <option value="{{$val['id']}}">{{$val['name']}}</option>
                        @endif
                      @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="fileCourse">File video</label>
                      <input type="file" name="path_file_video" id="fileCourse">
                    </div>

                    <div class="form-group">
                      <label for="urlVideoCourse">Url video</label>
                      <input type="text" name="url_video" class="form-control" id="urlVideoCourse" placeholder="url video" value="{{$course->url_video}}">
                    </div>

                    <div class="form-group row-learn">
                      <div style="display: flex;">
                        <label style="padding-right: 20px;">Bạn sẽ học được gì</label>
                        <button type="button" class="btn btn-info buttonContent" onclick="libAddRowLearn($(this))">Thêm</button>
                      </div>
                      @if(count(json_decode($course->learn_what)) == 0)
                        <div class="learn-box">
                          <input type="text" name="learn_what[]" class="form-control">
                          <button type="button" class="btn btn-danger btn-sm" onclick="libRemoveRowLearn($(this))"><i class="fa fa-trash-o"></i></button>
                        </div>
                      @else
                        @foreach(json_decode($course->learn_what) as $key => $value)
                          <div class="learn-box">
                            <input type="text" name="learn_what[]" class="form-control" value="{{$value}}">
                            <button type="button" class="btn btn-danger btn-sm" onclick="libRemoveRowLearn($(this))"><i class="fa fa-trash-o"></i></button>
                          </div>
                        @endforeach
                      @endif
                    </div>


                    <div class="form-group">
                      <label for="priceCourse">Giá</label>
                      <input type="number" name="price" class="form-control" id="priceCourse" value="{{$course->price}}">
                    </div>

                    <div class="form-group">
                      <label for="oldPriceCourse">Giá cũ (nếu có)</label>
                      <input type="number" name="old_price" class="form-control" id="oldPriceCourse" value="{{$course->old_price}}">
                    </div>



                    <div class="form-group">
                      <label>Giới thiệu khóa học</label>
                      <textarea rows="3" name="content" id="content">{{$course->content}}</textarea>
                      <script>
                          jQuery(function($) {
                                  ckeditor('content');
                              })
                      </script>
                    </div>

                    <div class="form-group">
                      <label>Ảnh đại diện</label>
                      <span class="btn">
                          @if($course->avatar == null || $course->avatar == '')
                            <img class="img_prod" src="{{url('lib/images/anh_chinh.PNG')}}" onclick="libImgAnhChinh()" id="anh_chinh" style="width: 120px; height: 120px;">

                          @else
                            <img class="img_prod" src="{{asset('storage/' . $course->avatar)}}" onclick="libImgAnhChinh()" id="anh_chinh" style="width: 120px; height: 120px;">
                          @endif
                          
                          <input type="file" name="avatar" id="file_anh_chinh" style="display: none;" onchange="libChangeAnhChinh(this);">
                      </span>
                    </div>

                    <div class="form-group">
                      <label>
                        Hiển thị
                      </label>
                      @if($course->status == 1)
                        <input type="checkbox" name="status" checked data-toggle="toggle" data-onstyle="success" data-size="small">
                      @else
                        <input type="checkbox" name="status" data-toggle="toggle" data-onstyle="success" data-size="small">
                      @endif
                      
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Nội Dung Khóa Học</h3>
              <!-- <button type="button" class="btn btn-info buttonContent" onclick="showModalChapter()">Thêm Nội Dung</button> -->
              <button type="button" class="btn btn-success" onclick="showModalChapter()"><i class="fa fa-plus-square"> Thêm</i></button>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <div class="content">
                <div class="panel-group" id="accordion">
                  @foreach($contentCourse as $key => $value)
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-md-12" style="display: flex;">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$value->id}}" class="" aria-expanded="true"><i class="fa fa-minus-square" aria-hidden="true"></i> {{$value->name}}</a>
                            </h4>
                            <div style="float: right;">
                              <!-- <button type="button" class="btn btn-info buttonContent" onclick="moDalVideo()">Sửa</button> -->
                              <button type="button" class="btn btn-warning buttonContent" onclick="editChapter({{$value->id}})"><i class="fa fa-eye"></i> Sửa</button>
                              <button type="button" class="btn btn-info buttonContent" onclick="showModalLesson({{$value->id}})"><i class="fa fa-plus-square"> Thêm</i></button>
                              <button type="button" class="btn btn-danger buttonContent" onclick="showModalDeleteChapter({{$value->id}})"><i class="fa fa-trash-o"></i> Xóa</button>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div id="collapse{{$value->id}}" class="panel-collapse collapse" aria-expanded="true">
                      <div class="panel-body">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info"> 
                          <tbody>
                            @foreach($value->lesson as $k => $val)
                            <tr>
                              <td class="col-sm-8">{{$val->name}}</td>
                              <td>{{$val->time}}</td>
                              <td>
                                <button type="button" class="btn btn-warning btn-sm" onclick="viewLesson({{$val->id}})"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-danger btn-sm" onclick="deleteLesson({{$val->id}})"><i class="fa fa-trash-o"></i></button>
                              </td>
                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>

                  </div>
                  @endforeach
                </div>
              </div>
              
            </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>

<!-- modal create chapter -->

<div class="modal fade" id="modalChapter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nội Dung Khóa Học</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" name="" id="formChapter" enctype="multipart/form-data" action="{{route('postSaveChapter')}}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tên Nội Dung</label>
            <input type="text" class="form-control" id="nameChapter" name="name">
            <input type="hidden" name="id" id="idChapter" value="">
            <input type="hidden" name="course_id" id="idCourse" value="{{$course->id}}">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitFormChapter()">Lưu</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalLesson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nội Dung Bài Học</h5>
       <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <form method="post" name="" id="formLesson" enctype="multipart/form-data" action="{{route('postSaveLesson')}}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tên Bài Học</label>
            <input type="text" class="form-control" id="nameChapter" name="name">
            <input type="hidden" name="id" id="idChapter" value="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">File video</label>
            <input type="file" name="path_file_video" id="fileCourse">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Đường dẫn video</label>
            <input type="text" class="form-control" id="nameChapter" name="name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mã nhúng video</label>
            <textarea class="form-control" name="description" rows="2" id="descriptionCourse" placeholder="Description ..."></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Thời lượng bài học</label>
            <input type="time" step='1' name="time" min="00:00:00" max="10:00:00" class="form-control input-sm">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Hiển thị</label>
            <input type="checkbox" name="status" data-toggle="toggle" data-onstyle="success" data-size="small">
            <label for="recipient-name" class="col-form-label">Học thử</label>
            <input type="checkbox" name="status" data-toggle="toggle" data-onstyle="success" data-size="small">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitFormLesson()">Lưu</button>
      </div>
    </div>
  </div>
</div>

@endsection