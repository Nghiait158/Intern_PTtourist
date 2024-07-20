 <video playsinline autoplay muted loop>
    {{-- <source src="{{ ('/frontend/video/background.mp4') }}" /> --}}
    {{-- @if(isset($latestVideo)) // check xem biến $latestVideo có không? (khác null và undefined) --}}
    @if($latestVideo) // check xem biến $latestVideo có rỗng không (khác null, undefined, '', false, 0,...) nói chung là falsy value
      <source src="{{ asset($latestVideo->imgPath) }}" type="video/mp4">
    @else
      <source src="{{ ('/frontend/video/background.mp4') }}" type="video/mp4">
    @endif
  </video>
