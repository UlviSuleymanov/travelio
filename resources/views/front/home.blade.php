@extends(".layouts.front.layout")

@section("content")

<!-- slider area -->
@include("front.inc.slider")
<!-- slider area -->

<!-- blogs area -->
@include("front.inc.blogs")
<!-- blogs area -->

<!-- marquee area -->
@include("front.inc.marquee")
<!-- marquee area -->


<!-- articles area -->
@include("front.inc.articles")
<!-- articles area -->

<!-- categories area -->
<!-- taskda kateqoriyalar yox idi. -->
{{--@include("front.inc.categories")--}}
<!-- categories area -->

<!-- informations area -->
@include("front.inc.informations")
<!-- informations area -->

<!-- banner area -->
@include("front.inc.banner")
<!-- banner area -->

@include("front.inc.gallery")

@endsection
