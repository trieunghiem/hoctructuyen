
@extends('admin.partial.layout')

@section('content')


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
              <h3 class="box-title">Bootstrap Slider</h3>
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
                    <div style="display: flex;">
                      <input type="text" class="form-control">
                      <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </div>
                    <br>
                    <div style="display: flex;">
                      <input type="text" class="form-control">
                      <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </div>
                    <br>
                    <div style="display: flex;">
                      <input type="text" class="form-control">
                      <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </div>
                    <br>
                    
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
    </section>
    <!-- /.content -->
  </div>

@endsection