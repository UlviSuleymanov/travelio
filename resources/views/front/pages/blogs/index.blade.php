@extends("layouts.front.layout")



@section("content")
    @if(!empty($selected))
        <section class="cs_page_heading cs_center text-center cs_primary_bg cs_bg_filed" data-src="{{'/storage/'.$selected->image}}">
            <div class="container">
                <h1 class="cs_fs_90 mb-0 cs_white_color">Recent Blog Post</h1>
            </div>
        </section>
    @endif

    <!-- Start Blog List -->
    <div class="container-fluid">
        <div class="cs_height_150 cs_height_lg_80"></div>
        <div class="row cs_row_gap_40 cs_gap_y_60 ">
            <div class="col-lg-8">
                <div class="row cs_gap_y_40 cs_row_gap_40">
                    @if(!empty($blogs))
                        @foreach($blogs as $blog)
                            <div class="col-md-6">
                                <div class="cs_post cs_style_18">
                                    <a href="{{route('site.blog-single', ['slug' => $blog->slug]) }}" class="cs_post_thumb cs_zoom cs_mb_34 cs_mb_lg_20 cs_radius_15">
                                        <img src="{{"/storage/". $blog->thumb}}" alt="Thumb" class="cs_zoom_in">
                                    </a>
                                    <div class="cs_post_info">
                                        <p class="cs_post_meta cs_mb_17 cs_mb_lg_12 cs_fs_23">By <p href="#">{{$blog->admin->full_name}}</p></p>
                                        <h2 class="cs_post_title mb-0 cs_fs_32"><a href="{{route('site.blog-single', ['slug' => $blog->slug]) }}">{{$blog->title}}</a></h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="cs_show_mobile">
                    <div class="cs_height_130 cs_height_lg_75"></div>
                    <div class="cs_post_nav">
                        <div class="cs_post_nav_left">
                            <button type="button" class="cs_post_nav_btn">
                                <svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.292892 7.29289C-0.0976295 7.68342 -0.0976295 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM36 7L1 7V9L36 9V7Z" fill="currentColor"></path>
                                </svg>
                            </button>
                            <span class="cs_fs_64 cs_primary_color">01</span>
                        </div>
                        <div class="cs_post_nav_right">
                            <span class="cs_fs_64 cs_primary_color">02</span>
                            <button type="button" class="cs_post_nav_btn">
                                <svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M35.7071 8.70711C36.0976 8.31659 36.0976 7.68342 35.7071 7.2929L29.3431 0.928935C28.9526 0.53841 28.3195 0.53841 27.9289 0.928935C27.5384 1.31946 27.5384 1.95262 27.9289 2.34315L33.5858 8L27.9289 13.6569C27.5384 14.0474 27.5384 14.6805 27.9289 15.0711C28.3195 15.4616 28.9526 15.4616 29.3431 15.0711L35.7071 8.70711ZM-8.74228e-08 9L35 9L35 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cs_right_sidebar">
                    <div class="cs_sidebar_widget">
                        <div class="cs_section_heading cs_style_2">
                            <h2 class="cs_section_title cs_mb_35 cs_fs_32"><span>Popular Posts</span></h2>
                        </div>
                        <ul class="cs_popular_post_list cs_mp_0">
                            @if(!empty($sidebar_blogs))
                                @foreach($sidebar_blogs as $blog)
                                    <li>
                                        <div class="cs_post cs_style_6 cs_type_1">
                                            <a href="{{route('site.blog-single', ['slug' => $blog->slug]) }}" class="cs_post_thumb cs_zoom">
                                                <img src="{{"/storage/". $blog->thumb}}" alt="Thumb" class="cs_zoom_in">
                                            </a>
                                            <div class="cs_post_info">
                                                <p class="cs_post_meta cs_mb_10 cs_fs_16">By <p href="#">{{$blog->admin->full_name}}</p></p>
                                                <h2 class="cs_post_title mb-0 cs_fs_23"><a href="{{route('site.blog-single', ['slug' => $blog->slug]) }}">{{$blog->title}}</a></h2>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="cs_height_140 cs_height_lg_80"></div>
    </div>
    <!-- End Blog List -->

@endsection
