
<div class="cs_height_150 cs_height_lg_80"></div>
<div class="container-fluid">
    <div class="row cs_gap_y_95 cs_row_gap_40">
        @if(!empty($blogs))
            @foreach($blogs as $blog)
                <div class="col-lg-6">
                    <div class="cs_post cs_style_2">
                        <a href="{{$blog->slug}}" class="cs_post_thumb cs_zoom cs_mb_45 cs_mb_xl_30 cs_radius_15">
                            <img src="{{"/storage/". $blog->thumb}}" alt="Thumb" class="cs_zoom_in">
                        </a>
                        <div class="cs_post_info">
                            <p class="cs_post_meta cs_mb_25 cs_mb_xl_10 cs_fs_23">By <p href="#">{{$blog->admin->full_name}}</p></p>
                            <h2 class="cs_post_title cs_mb_25 cs_mb_xl_12 cs_fs_64"><a href="{{route('site.blog-single', ['slug' => $blog->slug]) }}}}"> {{ $blog->title }}</a></h2>
                            <p class="cs_post_subtitle mb-0">{{$blog->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<div class="cs_height_130 cs_height_lg_75"></div>
