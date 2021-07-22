@extends('layouts.app')

@section('content')
<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i>View Bulletin Board</h3>
  <div class="row mt">
    <div class="col-lg-12">
    <p>View and manage Bulletin Board</p>
    </div>
    <div class="col-md-12">
      <div class="showback">
        
          @if(!is_null($details->thumbnail))
            <img src="data:image/{{ $details->thumbnail_ext }} ;base64, {{$details->thumbnail}}" alt="{{ $details->title }} thumbnail" class="img-responsive center-block" style="max-width: 30%;">
          @else
            <img class="img-responsive center-block" style="max-width: 30%;" alt="Default thumbnail" src="{{ url('images/placeholder.png') }}">
          @endif
          <h3> {{ $details->title }} </h3>
          <?php echo $details->content; ?>
          
      </div><!--/showback -->
    </div>
  </div>

</section><!--/wrapper -->


@endsection
