<!DOCTYPE html>
<html lang="en">

@include('guest.partials.header')

<!--Start of Tawk.to Script-->
<body>

  <!-- ======= Header ======= -->
  @include('sweetalert::alert')
  @include('guest.partials.navbar')

  <!-- ======= Hero Section ======= -->
  {{-- @yield('carousel') --}}

  <main id="main">

   {{$slot}}

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  @include('guest.partials.footer')

  @include('guest.partials.scripts')

</body>

</html>
