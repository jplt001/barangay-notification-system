@extends('layouts.app')

@section('content')
<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i>View Health Tip</h3>
  <div class="row mt">
    <div class="col-lg-12">
    <p>View and manage Health Tip</p>
    </div>
    <div class="col-md-12">
      <div class="showback">
        
          @if(!is_null($details->thumbnail))
            <img src="data:image/{{ $details->thumbnail_ext }} ;base64, {{$details->thumbnail}}" alt="{{ $details->health_tip_title }} thumbnail" class="img-responsive center-block" style="max-width: 30%;">
          @else
            <img class="img-responsive center-block" style="max-width: 30%;" alt="Default thumbnail" src="{{ url('images/placeholder.png') }}">
          @endif
          <h3> {{ $details->health_tip_title }} </h3>
          <?php echo $details->health_tip_content; ?>
          
      </div><!--/showback -->
    </div>
  </div>

</section><!--/wrapper -->


@endsection
