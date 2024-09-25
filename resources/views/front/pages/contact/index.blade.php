@extends("layouts.front.layout")


@section("content")

    <!-- Start Contact Section -->
    <section>
        <div class="cs_height_140 cs_height_lg_75"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="text-center">
                        <h2 class="text-center cs_fs_45 cs_mb_12">Get in touch</h2>
                        <p class="mb-0">Connect with me through email, phone or the contact form and let's start a conversation.</p>
                        <div class="cs_height_90 cs_height_lg_50"></div>
                    </div>
                    <div class="row cs_gap_y_24">
                        <div class="col-lg-6">
                            <div class="cs_iconbox cs_style_1 cs_radius_15">
                                <div class="cs_iconbox_icon cs_center cs_secondary_bg"><img src="assets/img/icons/email.svg" alt=""></div>
                                <div class="cs_iconbox_right">
                                    <h3 class="cs_fs_23 cs_mb_1">Send us an email</h3>
                                    <p class="mb-0"><a href="mainto:info@traven.com">info@traven.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cs_iconbox cs_style_1 cs_radius_15">
                                <div class="cs_iconbox_icon cs_center cs_secondary_bg"><img src="assets/img/icons/phone.svg" alt=""></div>
                                <div class="cs_iconbox_right">
                                    <h3 class="cs_fs_23 cs_mb_1">Phone Number</h3>
                                    <p class="mb-0"><a href="tel:(+55)34099145">(+55) 340 99 145</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs_height_100 cs_height_lg_60"></div>
                    <form action="#" class="row cs_gap_y_30">
                        <div class="col-lg-6">
                            <input type="text" class="cs_form_field" placeholder="Your name *">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="cs_form_field" placeholder="Your email *">
                        </div>
                        <div class="col-lg-12">
                            <textarea cols="30" rows="7" class="cs_form_field" placeholder="Write your details *"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="text-center">
                                <button class="cs_btn cs_style_2 cs_type_1 cs_fs_23 cs_radius_15" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Contact Section -->
    <!-- Start Map Section -->
    <div class="cs_map">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen=""></iframe>
    </div>
    <!-- End Map Section -->

@endsection
