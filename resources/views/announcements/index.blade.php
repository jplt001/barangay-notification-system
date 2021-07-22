@extends('layouts.app')

@section('content')
<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i> Bulletin Board</h3>
  <div class="row mt">
    <div class="col-lg-12">
    <p>View and manage Bulletin Board</p>
    </div>
    <div class="col-md-12">
      <div class="showback">
          <h4><i class="fa fa-angle-right"></i> Bulletin Board List</h4>
          <div class="form-group" style="text-align: right;">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myofAnnouncements">New Bulletin Board</button>
          </div>
          <table class="table table-hover" id="tbl-announcement">
            <thead>
              <th>Title</th>
              <th>Created When</th>
              <th>Status</th>
              <th><small>ACTIONS</small></th>
            </thead>
          </table>
                
      </div><!--/showback -->
    </div>
  </div>

</section><!--/wrapper -->

<!-- Modal -->
<div id="add-announcement" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Bulletin Board</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/announcements') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="text-info">Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-info">Content</label>
            <textarea class="ckeditor" name="content" id="editor">
                <p>Here goes the initial content of the editor.</p>
            </textarea>
            <!-- <textarea <nav></nav>ame="content" class="form-control" style="resize: vertical;"></textarea> -->
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="edit-announcement" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Announcement</h4>
      </div>
      <div class="modal-body">
       <form method="POST" action="{{ url('ajax/update-announcements') }}">
          {{ csrf_field() }}
          <input type="hidden" name="idEdit" id="idEdit">
          <div class="form-group">
            <label class="text-info">Title</label>
            <input type="text" name="title" id="titleEdit" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-info">Content</label>
            <textarea name="content" id="contentEdit" class="form-control" style="resize: vertical;"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="myofAnnouncements" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Choose Bulletin Board Type</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
          <a href="{{ url('bulletin-board/create') }}" class="btn btn-primary btn-block">Announcements</a>
        </div>
        <div class="col-md-6">
          <a href="{{ url('achievements/create') }}" class="btn btn-primary btn-block">Achievements</a>
        </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
