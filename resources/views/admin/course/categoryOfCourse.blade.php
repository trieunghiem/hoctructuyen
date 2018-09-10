
@extends('admin.partial.layout')

@section('content')

<script src="{{ url('lib/js/jquery.form.js') }}"></script>

<script src="{{ url('js/app/admin/course/lib.js') }}"></script>
<script src="{{ url('js/app/admin/course/categoryOfCourse.js') }}"></script>

  <div class="content-wrapper">
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">

            <div class="box-header">
              <h3 class="box-title">Danh Mục Khóa Học</h3>
            </div>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row" class="odd">
                        <th class="sorting_1 col-sm-11">Tên Danh Mục</th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead> 
                    <tbody id="listDataCourse">
                      @foreach($cateCourse as $key => $value)
                      <tr role="row" class="odd">
                        <td class="sorting_1">{{$value['name']}}</td>
                        <td>
                          <button type="button" class="btn btn-warning btn-sm" onclick="getCategory({{$value['id']}})"><i class="fa fa-eye"></i></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>

<div class="modal fade" id="modalCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Danh Mục Khóa Học</h5>
      </div>
      <div class="modal-body">
        <form method="post" name="" id="formCategory" enctype="multipart/form-data" action="{{route('saveCategory')}}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tên Danh Mục</label>
            <input type="text" class="form-control" id="nameCategory" name="name">
            <input type="hidden" name="id" id="idCategory" value="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Đường Dẫn</label>
            <input type="text" class="form-control" id="slugCategory" name="alias">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title</label>
            <input type="text" class="form-control" id="titleCategory" name="title">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description</label>
            <textarea class="form-control" name="description" rows="2" id="descriptionCategory" placeholder="Description..."></textarea>
          </div>

          <div class="form-group">
            <label>Hình ảnh</label>
            <span class="btn">

              <img class="img_prod" src="{{url('lib/images/anh_chinh.PNG')}}" onclick="libImgAnhChinh()" id="anh_chinh" style="width: 120px; height: 120px;">
                
              <input type="file" name="og_image" id="file_anh_chinh" style="display: none;" onchange="libChangeAnhChinh(this);">
            </span>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Hiển thị</label>
            <div id="statusShowCategory">
              <input type="checkbox" name="status" data-toggle="toggle" data-onstyle="success" data-size="small">
            </div>
            <label for="recipient-name" class="col-form-label">Hiển thị trang chủ</label>
            <div id="statusShowHome">
              <input type="checkbox" name="statusHome" data-toggle="toggle" data-onstyle="success" data-size="small">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitFormCategory()">Lưu</button>
      </div>
    </div>
  </div>
</div>




@endsection