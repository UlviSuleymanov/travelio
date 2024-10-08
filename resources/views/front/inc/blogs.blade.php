<div class="container-fluid">
    <div class="cs_section_heading cs_style_1">
        <h2 class="cs_section_title cs_fs_90 mb-0">Featured Posts</h2>
        <div class="cs_section_btn cs_hide_mobile">
            <a href="{{route("site.blog")}}" class="cs_btn cs_style_2 cs_fs_23 cs_primary_color">Explore More</a>
        </div>
    </div>
    <div class="cs_height_90 cs_height_lg_50"></div>
    <div class="cs_slider cs_style_1 cs_slider_gap_40">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
             data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
             data-md-slides="2" data-lg-slides="3" data-add-slides="3">
            <div class="cs_slider_wrapper">

                @if(!empty($blogs))
                    @foreach($blogs as $blog)
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_radius_15">
                                <a href="{{route('site.blog-single', ['slug' => $blog->slug]) }}" class="cs_post_thumb d-block cs_zoom cs_mb_32">
                                    <img src="{{"/storage/". $blog->thumb}}" alt="Thumb" class="cs_zoom_in">
                                </a>
                                <div class="cs_post_info">
                                    <p class="cs_post_meta cs_mb_25 cs_mb_xl_10 cs_fs_23">By <a
                                            href="#">{{$blog->admin->full_name}}</a></p>
                                    <h2 class="cs_post_title cs_mb_25 cs_mb_xl_15 cs_fs_45">
                                        <a href="{{ route('site.blog-single', ['slug' => $blog->slug]) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h2>
                                    <p class="cs_post_subtitle mb-0">{{$blog->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="cs_pagination cs_style_2"></div>
    </div>
    <div class="text-center cs_show_mobile">
        <div class="cs_height_40 cs_height_lg_40"></div>
        <a href="{{route("site.blog")}}" class="cs_btn cs_style_2 cs_fs_23 cs_primary_color">Explore More</a>
    </div>
</div>
<div class="cs_height_150 cs_height_lg_80"></div>
