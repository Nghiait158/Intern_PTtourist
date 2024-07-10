<video playsinline autoplay muted loop>
    {{-- <source src="{{ ('/frontend/video/background.mp4') }}" /> --}}
    @if($latestVideo)
      <source src="{{ asset($latestVideo->imgPath) }}" type="video/mp4">
    @else
      <source src="{{ ('/frontend/video/background.mp4') }}" type="video/mp4">
    @endif
  </video>