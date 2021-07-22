@extends('layouts.app')

@section('content')
<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i> Incident Report</h3>
  <div class="row mt">
    <div class="col-lg-12">
    <p>View and manage Incident Report</p>
    </div>    
    <div class="col-md-4">
      <div class="showback">
        <h4><i class="fa fa-angle-right"></i> Filter By</h4>
        <div class="form-group">
          <label>From</label>
          <input type="text" name="from" class="form-control datepicker">
        </div>
      </div>
    </div>  
    <div class="col-md-8">
      <div class="showback">
        
      </div>
    </div>
  </div>
</section><!--/wrapper -->


@endsection