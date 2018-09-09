
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
                          <button type="button" class="btn btn-warning btn-sm" onclick="libRemoveRowLearn({{$value['id']}})"><i class="fa fa-eye"></i></button>
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




@endsection