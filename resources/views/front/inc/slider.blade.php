<!-- slider area -->
<section class="cs_hero_1_wrap">
    <div class="cs_slider cs_style_1">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-fade-slide="1" data-variable-width="0" data-slides-per-view="1">
            <div class="cs_slider_wrapper">
                @foreach($sliders as $slider)
                    <div class="cs_slide">
                        <div class="cs_hero cs_style_1">
                            <div class="container-fluid">
                                <div class="cs_hero_in">
                                    <div class="cs_hero_thumb cs_bg_filed" data-src="{{"/storage/".$slider->image}}"></div>
                                    <div class="cs_hero_text">
                                        <h1 class="cs_fs_128 cs_medium cs_mb_26">{{$slider->title}}</h1>
                                        @if(!empty($slider->link))
                                        <a href="{{$slider->link}}" target="_blank" class="cs_btn cs_style_1 cs_fs_23 cs_center cs_primary_bg cs_white_color"><span>Read</span></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="cs_pagination cs_style_1"></div>
    </div>
</section>
<div class="cs_height_170 cs_height_lg_75"></div>
<!-- slider area -->
