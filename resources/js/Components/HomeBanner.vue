<template>
    <body class="home theme-creote page-home-default-one">
        <div id="page" class="page_wapper hfeed site">
            <div id="wrapper_full" class="content_all_warpper">
                <!--===============PAGE CONTENT==============-->
                <div id="content" class="site-content">
                    <!--- slider-->
                    <section
                        class="slider style_page_fourteen nav_position_one position-relative"
                        style="margin-top: -160px"
                    >
                        <div
                            class="banner_carousel owl-carousel owl-carousel1 owl_nav_block owl_dots_none theme_carousel owl-theme"
                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'
                        >
                            <div class="slide-item-content">
                                <div class="slide-item content_left">
                                    <div
                                        class="image-layer"
                                        :style="{
                                            'background-image':
                                                isValidImage && !notFound
                                                    ? 'url(' + imageUrl + ')'
                                                    : 'url(front/assets/images/home-banner1.png)',
                                        }"
                                    ></div>
                                    <div class="medium-container">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-lg-8 col-md-12 col-sm-12 col-xs-12"
                                            >
                                                <div class="slider_content">
                                                    <h6
                                                        class="animate_left"
                                                        style="color: #af0820"
                                                    >
                                                        {{
                                                            home_page_content.banner_heading
                                                        }}
                                                    </h6>
                                                    <h1
                                                        class="animate_up"
                                                        style="
                                                            color: #081b49;
                                                            font-size: 54px;
                                                        "
                                                    >
                                                        {{
                                                            home_page_content.banner_description
                                                        }}
                                                        <span
                                                            class="business-container"
                                                            >Business</span
                                                        >
                                                    </h1>
                                                    <p
                                                        class="animate_right pd_bottom_40"
                                                    ></p>
                                                    <ul class="animate_down">
                                                        <li
                                                            class="theme_btn_all"
                                                        >
                                                            <a
                                                                v-if="
                                                                    home_page_content.banner_button_enable
                                                                "
                                                                :href="
                                                                    home_page_content.banner_button_link
                                                                "
                                                                class="theme-btn one"
                                                                style="
                                                                    background-color: #081b49;
                                                                    color: white;
                                                                    border: none;
                                                                "
                                                            >
                                                                {{
                                                                    home_page_content.banner_button_text
                                                                }}
                                                            </a>
                                                        </li>
                                                        <li
                                                            class="theme_btn_all color_one"
                                                        >
                                                            <a
                                                                :href="
                                                                    route(
                                                                        'front.our_work'
                                                                    )
                                                                "
                                                                class="theme-btn two"
                                                                >Projects</a
                                                            >
                                                        </li>
                                                    </ul>
                                                    <img
                                                        v-if="
                                                            isValidImage &&
                                                            !notFound
                                                        "
                                                        :src="imageUrl"
                                                        alt="image"
                                                        @error="notFound = true"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="slide-item-content">
                                <div class="slide-item content_left">
                                    <div
                                        class="image-layer"
                                        style="
                                            background-image: url(front/assets/images/second_banner.jpg);
                                        "
                                    ></div>
                                    <div class="medium-container">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-lg-8 col-md-12 col-sm-12 col-xs-12"
                                            >
                                                <div class="slider_content">
                                                    <h6
                                                        class="animate_left"
                                                        style="color: #081b49"
                                                    >
                                                        Solutions for your
                                                        business
                                                    </h6>
                                                    <h1
                                                        class="animate_up"
                                                        style="
                                                            color: #081b49;
                                                            font-size: 60px;
                                                        "
                                                    >
                                                        Excellence For
                                                        <br />
                                                        People In Business
                                                    </h1>
                                                    <p
                                                        class="animate_right pd_bottom_40"
                                                        style="color: #081b49"
                                                    >
                                                        Nurturing a supportive,
                                                        inclusive environment
                                                        that empowers
                                                        individuals, <br />
                                                        fosters collaboration,
                                                        and drives exceptional
                                                        results.
                                                    </p>
                                                    <ul class="animate_down">
                                                        <li
                                                            class="theme_btn_all"
                                                        >
                                                            <a
                                                                :href="
                                                                    route(
                                                                        'front.services'
                                                                    )
                                                                "
                                                                class="theme-btn one"
                                                                style="
                                                                    background-color: #081b49;
                                                                    color: white;
                                                                    border: none;
                                                                "
                                                                >Our Service</a
                                                            >
                                                        </li>
                                                        <li
                                                            class="theme_btn_all color_one"
                                                        >
                                                            <a
                                                                :href="
                                                                    route(
                                                                        'front.our_work'
                                                                    )
                                                                "
                                                                class="theme-btn two"
                                                                >Projects</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-content">
                                <div class="slide-item content_left">
                                    <div
                                        class="image-layer"
                                        style="
                                            background-image: url(front/assets/images/third_banner.jpg);
                                        "
                                    ></div>
                                    <div class="medium-container">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-lg-8 col-md-12 col-sm-12 col-xs-12"
                                            >
                                                <div class="slider_content">
                                                    <h6
                                                        class="animate_left"
                                                        style="color: #081b49"
                                                    >
                                                        Strategy Planning
                                                    </h6>
                                                    <h1
                                                        class="animate_up"
                                                        style="
                                                            color: #081b49;
                                                            font-size: 60px;
                                                        "
                                                    >
                                                        Skilled Industry
                                                        Professionals
                                                    </h1>
                                                    <p
                                                        class="animate_right pd_bottom_40"
                                                        style="color: #081b49"
                                                    >
                                                        Experts driving business
                                                        success through their
                                                        expertise, experience,
                                                        and innovation, <br />
                                                        delivering exceptional
                                                        products and services
                                                        that surpass customer
                                                        expectations.
                                                    </p>
                                                    <ul class="animate_down">
                                                        <li
                                                            class="theme_btn_all"
                                                        >
                                                            <a
                                                                :href="
                                                                    route(
                                                                        'front.about'
                                                                    )
                                                                "
                                                                class="theme-btn one"
                                                                style="
                                                                    background-color: #081b49;
                                                                    color: white;
                                                                    border: none;
                                                                "
                                                                >About Us
                                                            </a>
                                                        </li>
                                                        <li
                                                            class="theme_btn_all color_one"
                                                        >
                                                            <a
                                                                :href="
                                                                    route(
                                                                        'front.services'
                                                                    )
                                                                "
                                                                class="theme-btn two"
                                                                >Our Service
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!---slider-end--->
                  
                    <!--about-->
                    <section class="about-section bg_light_1 position-relative">
                        <div class="container-fluid container-xl">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div
                                        class="title_all_box style_seven dark_color"
                                    >
                                        <div class="title_sections">
                                            <div class="before_title">
                                                {{
                                                    home_page_content.banner_heading
                                                }}
                                            </div>
                                            <div class="title">
                                                {{
                                                    home_page_content.banner_description
                                                }}
                                                Business.
                                            </div>

                                            <p class="description_text">
                                                We have products and services to
                                                meet your requirements we
                                                provide the optimum and
                                                customized solutions made for
                                                your business.
                                            </p>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_20"></div>
                                    <!--===============spacing==============-->
                                    <div class="icon_carousel_box_all">
                                        <div
                                            class="owl_dots_block theme_carousel owl-theme owl-carousel owl-carousel4"
                                            data-options='{"loop": true, "margin": 20, "autoheight":true, "lazyload":true, "nav": false, "dots": false, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "3" } , "1000":{ "items" : "1" }}}'
                                        >
                                            <div
                                                class="icon_caro type_one"
                                                style="
                                                    background-color: #af0820;
                                                "
                                            >
                                                <div class="icon">
                                                    <img
                                                        src="front/assets/images/shooting-target.png"
                                                        class="img-fluid svg_image"
                                                        alt="icon png"
                                                    />
                                                </div>
                                                <div class="text">
                                                    <h2>
                                                        <a> Our Mission </a>
                                                    </h2>
                                                    <p>
                                                        Our mission is to
                                                        provide innovative and
                                                        tailored solutions to
                                                        meet the unique needs of
                                                        businesses across
                                                        various sectors.
                                                    </p>
                                                    <a
                                                        :href="
                                                            route('front.about')
                                                        "
                                                        class="read_more type_one"
                                                        style="color: white"
                                                    >
                                                        Read More
                                                        <span
                                                            class="icon-arrow-right"
                                                        ></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div
                                                class="icon_caro type_one"
                                                style="
                                                    background-color: #af0820;
                                                "
                                            >
                                                <div class="icon">
                                                    <img
                                                        src="front/assets/images/focus1.png"
                                                        class="img-fluid svg_image"
                                                        alt="icon png"
                                                    />
                                                </div>
                                                <div class="text">
                                                    <h2>
                                                        <a> We Are Creative </a>
                                                    </h2>
                                                    <p>
                                                        Whole creativity depends
                                                        on focus and
                                                        determination. Practice
                                                        focus, Structure your
                                                        time, not your tasks.
                                                        And be prepared. We work
                                                        with creativity mind and
                                                        innovative skills.
                                                    </p>
                                                    <a
                                                        :href="
                                                            route('front.about')
                                                        "
                                                        class="read_more type_one"
                                                        style="color: white"
                                                    >
                                                        Read More
                                                        <span
                                                            class="icon-arrow-right"
                                                        ></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div
                                        class="image_box_new type_two clearfix pd_left_40 md_pd_left_zero"
                                    >
                                        <div class="image_box_inner">
                                            <div class="image one">
                                                <img
                                                    src="front/assets/images/web2.jpg"
                                                    class="img-fluid"
                                                    alt="img"
                                                />

                                                <div class="quote">
                                                    <h2>
                                                        Experienced &amp; Well
                                                        knowledgeable Developers
                                                        &amp; Consultants.
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="image two">
                                                <img
                                                    src="front/assets/images/web1.jpg"
                                                    class="img-fluid"
                                                    alt="img"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_60"></div>
                        <!--===============spacing==============-->
                        <!--===============shape==============-->
                        <div class="position_absolute curve_shape_bottom_1">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 283.5 27.8"
                                preserveAspectRatio="none"
                            >
                                <path
                                    class="elementor-shape-fill"
                                    d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"
                                ></path>
                                <path
                                    class="elementor-shape-fill"
                                    d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z"
                                ></path>
                                <path
                                    class="elementor-shape-fill"
                                    d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z"
                                ></path>
                                <path
                                    class="elementor-shape-fill"
                                    d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z"
                                ></path>
                                <path
                                    class="elementor-shape-fill"
                                    d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z"
                                ></path>
                                <path
                                    class="elementor-shape-fill"
                                    d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z"
                                ></path>
                                <path
                                    class="elementor-shape-fill"
                                    d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"
                                ></path>
                                <path
                                    class="elementor-shape-fill"
                                    d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z"
                                ></path>
                                <path
                                    class="elementor-shape-fill"
                                    d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z"
                                ></path>
                            </svg>
                        </div>
                        <!--===============shape==============-->
                    </section>
                    <!---about end-->
                </div>
            </div>
        </div>
    </body>
</template>

<script>
export default {
    props: {
        home_page_content: Object,
    },
    mounted() {
        // Owl Carousel initialization
        $(".owl-carousel1").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            lazyload: true,
            autoplay: true,
            autoplayTimeout: 7000,
            stagePadding: 0,
            smartSpeed: 1800,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
                1400: {
                    items: 1,
                },
            },
        });
        $(".owl-carousel4").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            lazyload: true,
            autoplay: true,
            autoplayTimeout: 7000,
            stagePadding: 0,
            smartSpeed: 1800,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
                1400: {
                    items: 1,
                },
            },
        });

        // AOS (Animate On Scroll) initialization
        AOS.init({
            offset: 110,
            duration: 1000,
        });
    },
};
</script>

<style scoped>
.business-container {
    padding: 4px;
    background-color: #af0820;
    height: 73px;
    width: 270px;
    border-radius: 0px 20px 0px 0;
    color: #f5f5f7;
}
@media (max-width: 992px) {
    /* Adjust the max-width value as needed */
    .image-layer {
        background-image: none !important; /* Hide background images */
    }

    .slider_content img {
        display: none !important; /* Hide img elements */
    }
    .slider.style_page_fourteen {
        height: 650px !important; /* Set slider height to 300px */
    }
}
.image_box_new.type_two .image.two::before {
    position: relative;
    content: "";
    width: 100%;
    height: 111%;
    right: 119px;
    top: -100px;
    border-radius: 20px;
    background: var(--color-white);
    z-index: -11;
}
</style>
