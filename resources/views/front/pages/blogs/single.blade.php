@extends("layouts.front.layout")


@section("content")

    <div class="container-fluid p-0">
        <img src="{{asset('assets/img/blog_details_1.webp')}}" alt="">
    </div>
    <div class="cs_height_92 cs_height_lg_50"></div>
    <div class="container-fluid">
        <div class="row cs_row_gap_40 cs_gap_y_50">
            <div class="col-lg-8">
                <div class="position-relative">
                    <div class="row cs_col_reverse cs_gap_y_50">
                        <div class="col-lg-2">
                            <div class="cs_social_links_4_wrap">
                                <div class="cs_social_links cs_style_4">
                                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                                </div>
                                <span>Share</span>
                            </div>
                        </div>
                            <div class="cs_post_details cs_style_1">

                                <div class="col-lg-10">
                                <div class="cs_fs_23 cs_mb_30 cs_mb_lg_15">By {{$blog->admin->full_name}}</div>
                                <h1>{{$blog->title}}</h1>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            {{$blog->description}}
                                        </p>
                                    </div>

                                </div>
                                <div class="cs_height_30 cs_height_lg_20"></div>
                                <div class="cs_height_30 cs_height_lg_30"></div>
                                <img src="{{"/storage/".$blog->image}}" alt="">


                            </div>
                            <div class="cs_height_95 cs_height_lg_60"></div>
                            <div class="cs_height_88 cs_height_lg_60"></div>
                            <div class="cs_height_100 cs_height_lg_60"></div>
                            <div class="row cs_gap_y_40 cs_row_gap_40">
                                @if(!empty($footer_blogs))
                                    @foreach($footer_blogs as $blog)
                                        <div class="col-lg-6">
                                            <div class="cs_post cs_style_18">
                                                <a href="{{route('site.blog-single', ['slug' => $blog->slug]) }}"
                                                   class="cs_post_thumb cs_zoom cs_mb_34 cs_radius_15">
                                                    <img src="{{"/storage/". $blog->thumb}}" alt="Thumb"
                                                         class="cs_zoom_in">
                                                </a>
                                                <div class="cs_post_info">
                                                    <p class="cs_post_meta cs_mb_17 cs_fs_23">By
                                                    <p href="#">{{$blog->admin->full_name}}</p> </p>
                                                    <h2 class="cs_post_title mb-0 cs_fs_32"><a
                                                            href="{{route('site.blog-single', ['slug' => $blog->slug]) }}">{{$blog->title}}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
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
                                            <a href="{{route('site.blog-single', ['slug' => $blog->slug]) }}"
                                               class="cs_post_thumb cs_zoom">
                                                <img src="{{"/storage/". $blog->thumb}}" alt="Thumb" class="cs_zoom_in">
                                            </a>
                                            <div class="cs_post_info">
                                                <p class="cs_post_meta cs_mb_10 cs_fs_16">By
                                                <p href="#">{{$blog->admin->full_name}}</p></p>
                                                <h2 class="cs_post_title mb-0 cs_fs_23"><a
                                                        href="{{route('site.blog-single', ['slug' => $blog->slug]) }}">{{$blog->title}}</a>
                                                </h2>
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
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>

@endsection
