<div class="cs_moving_section_wrap cs_style_1">
    <div class="cs_moving_section_in cs_fs_128">
        @if(!empty($marquees))
            @foreach($marquees as $marquee)
                <div class="cs_moving_section cs_moving_duration_40">{{$marquee->title}}</div>
            @endforeach
        @endif
    </div>
</div>
