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
          <h4><i class="fa fa-angle-right"></i> New Bulletin Board - Achievements</h4>
          <form method="POST" action="{{ url('/achievements') }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="type_of_bulliten_board" value="1">
          <div class="form-group">
            <label class="text-info">Title</label>
            <input type="text" name="title" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Content</label>
            <textarea class="ckeditor" name="content" id="editor" required=""></textarea>
            
          </div>
          <div class="form-group">
            <label>Upload Thumbnail</label>
            <input type="file" name="thumbnail" accept="image/*">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info">Save</button>
          </div>
        </form>
                
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
        <h4 class="modal-title">Add Announcement</h4>
      </div>
      <div class="modal-body">
        
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
       <form method="POST" action="{{ url('/announcements') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="text-info">Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-info">Content</label>
            <textarea name="content" class="form-control" style="resize: vertical;"></textarea>
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
@endsection
