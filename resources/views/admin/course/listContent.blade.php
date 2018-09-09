
@extends('admin.partial.layout')

@section('content')

<script src="{{ url('lib/plugin-soanthao/ckeditor/ckeditor.js') }}"></script>
<script src="{{ url('lib/plugin-soanthao/func_ckfinder.js') }}"></script>
<script src="{{ url('lib/js/jquery.form.js') }}"></script>

<script src="{{ url('js/app/admin/course/lib.js') }}"></script>
<script src="{{ url('js/app/admin/course/listContent.js') }}"></script>

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
              <h3 class="box-title">Danh Sách Khóa Học</h3>
            </div>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                <div class="col-sm-4">
                  <div class="dataTables_length" id="example1_length">
                    <label>Hiển thị 
                      <select name="itemsPerPage" aria-controls="example1" class="form-control input-sm" id="itemsPerPage" onchange="listCustomer(1)">
                        <option value="10">10 bản ghi</option>
                        <option value="25">25 bản ghi</option>
                        <option value="50">50 bản ghi</option>
                        <option value="100">100 bản ghi</option>
                      </select> trên trang
                    </label>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="dataTables_length" id="example1_length">
                    <label>Danh Mục
                      <select name="status" id="status" onchange="" aria-controls="example1" class="form-control input-sm">
                        <option value="0">chọn danh mục</option>
                      @foreach($cateCourse as $key => $val)
                        <option value="{{$val['id']}}">{{$val['name']}}</option>
                      @endforeach
                      </select>
                    </label>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div id="example1_filter" class="dataTables_filter">
                    <label>Tìm kiếm:
                      <input type="search" onkeyup="listCustomer(1)" class="form-control input-sm" name="search" id="search" placeholder="" aria-controls="example1">
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row" class="odd">
                        <th class="sorting_1 col-sm-9">Tên Khóa Học</th>
                        <!-- <th class="col-sm-3">Avatar</th> -->
                        <th>Trang chủ/Hiển thị</th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead> 
                    <tbody id="listDataCourse">
                      <tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td><img src="" style="width: 120px;"></td>
                        <td>
                          <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-size="small">
                          <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-size="small">
                        </td>
                        <td>
                          <button type="button" class="btn btn-warning btn-sm" onclick="libRemoveRowLearn($(this))"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-danger btn-sm" onclick="libRemoveRowLearn($(this))"><i class="fa fa-trash-o"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>


            </div>

            <div class="row" id="code_phan_trang">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pages">
                  <ul class="pagination pagination-sm">
                    <li><a href="javascript:void(0)" onclick="listCustomer(1);">1</a></li>
                    <li><a href="javascript:void(0)" onclick="listCustomer(3);">3</a></li>
                    <li><a href="javascript:void(0)" onclick="listCustomer(4);">4</a></li>
                    <li class="active"><a href="javascript:void(0)">5</a></li>
                    <li><a href="javascript:void(0)" onclick="listCustomer(6);">6</a></li>
                    <li><a href="javascript:void(0)" onclick="listCustomer(7);">7</a></li>
                    <li><span>...</span></li>
                    <li><a href="javascript:void(0)" onclick="listCustomer(433);">433</a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>
  </div>




@endsection