@extends('layouts.app')

@section('content')
<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i> Health Tips</h3>
  <div class="row mt">
    <div class="col-lg-12">
    <p>View and manage Health Tips</p>
    </div>
    <div class="col-md-12">
      <div class="showback">
          <h4><i class="fa fa-angle-right"></i> Health Tips List</h4>
          <div class="form-group" style="text-align: right;">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myofAnnouncements">New Health Tips</button>
          </div>
          <table class="table table-hover" id="tbl-health-tips">
            <thead>
              <th>Title</th>
              <th>Added By</th>
              <th>Posted When</th>
              <th><small>ACTIONS</small></th>
            </thead>
            <tbody>              
              @foreach($healthTips as $k => $v)

                <tr>
                  <td>{{$v['health_tip_title']}}</td>
                  <td>{{$v['added_by']}}</td>
                  <td>{{$v['posted_when']}}</td>
                  <td><a href="{{ url('/health-tips')}}/{{$v['id']}}" class="btn btn-info btn-xs"> <i class="fa fa-eye"></i></a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
                
      </div><!--/showback -->
    </div>
  </div>

</section><!--/wrapper -->
<!-- Modal -->
<div id="myofAnnouncements" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Health Tips</h4>
      </div>
      <div class="modal-body">
        <form method="POSt" action="{{ url('/health-tips') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Thumbnail</label>
            <input type="file" name="thumbnail">
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="health_tip_title" class="form-control">
          </div>
          <div class="form-group">
            <label>Content</label>
            <textarea class="ckeditor" name="health_tip_content" id="ckeditor"></textarea>
          </div>
        
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection
