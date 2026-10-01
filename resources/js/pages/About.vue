<template>
    <layout>
        <main id="main">
            <body class="theme-creote">
                <div id="page" class="page_wapper hfeed site">
                    <!---============== wrapper_full =================-->
                    <div id="wrapper_full" class="content_all_warpper">
                        <!-- --preloader----->
                        <!-- <div class="preloader-wrap">
                            <div
                                class="preloader"
                                style="
                                    background-image: url(front/assets/images/preloader.gif);
                                "
                            ></div>
                            <div class="overlay"></div>
                        </div> -->
                        <!----preloader--- -->

                        <!----page header----->
                        <div class="page_header_default style_one">
                            <div class="parallax_cover">
                                <img
                                    src="front\assets\images\about-us.jpg"
                                    alt="bg_image"
                                    class="cover-parallax"
                                />
                            </div>
                            <div class="page_header_content">
                                <div class="auto-container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner_title_inner">
                                                <div class="title_page">
                                                    {{
                                                        about_page_content.banner_heading
                                                    }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="breadcrumbs creote">
                                                <ul class="breadcrumb m-auto">
                                                    <li>
                                                        <a
                                                            :href="
                                                                route(
                                                                    'front.index'
                                                                )
                                                            "
                                                            >Home</a
                                                        >
                                                    </li>
                                                    <li class="active">
                                                        {{
                                                            about_page_content.banner_heading
                                                        }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----page header----->
                        
                        <!--===============PAGE CONTENT==============-->
                        <div id="content" class="site-content">
                            <!---about--->
                            <section class="about-section bg_light_1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12">
                                            <div
                                                class="about_content position-relative z_99"
                                            >
                                                <div
                                                    class="title_all_box style_one text-left dark_color"
                                                >
                                                    <div class="title_sections">
                                                        <div
                                                            class="before_title"
                                                        >
                                                            We Build
                                                        </div>
                                                        <h2>
                                                            Software To
                                                            Transform Your
                                                            Business
                                                        </h2>
                                                    </div>
                                                </div>
                                                <!--===============spacing==============-->
                                                <div class="pd_bottom_15"></div>
                                                <!--===============spacing==============-->
                                                <div
                                                    class="extra_content image_with_content dark_color"
                                                >
                                                    <h5>
                                                        Since 2019, <br />
                                                        Operating in Lahore,
                                                        Pakistan.
                                                    </h5>
                                                </div>
                                                <!--===============spacing==============-->
                                                <div class="pd_bottom_20"></div>
                                                <!--===============spacing==============-->
                                                <div class="description_box">
                                                    <div
                                                        v-html="
                                                            about_page_content.body
                                                        "
                                                    ></div>
                                                </div>
                                                <!--===============spacing==============-->
                                                <div class="pd_bottom_25"></div>
                                                <!--===============spacing==============-->
                                                <div class="row gutter_15px">
                                                    <div
                                                        class="col-lg-6 col-md-12"
                                                    >
                                                        <div
                                                            class="icon_box_all style_two"
                                                        >
                                                            <div
                                                                class="icon_content icon_imgs"
                                                            >
                                                                <div
                                                                    class="icon"
                                                                >
                                                                    <img
                                                                        src="front/assets/images/idea1.png"
                                                                        class="img-fluid svg_image"
                                                                        alt="icon png"
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="txt_content"
                                                                >
                                                                    <h3>
                                                                        <a
                                                                            >Tailored
                                                                            Advice
                                                                            &amp;
                                                                            Support</a
                                                                        >
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!--===============spacing==============-->
                                                            <div
                                                                class="pd_bottom_25"
                                                            ></div>
                                                            <!--===============spacing==============-->
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-6 col-md-12"
                                                    >
                                                        <div
                                                            class="icon_box_all style_two"
                                                        >
                                                            <div
                                                                class="icon_content icon_imgs"
                                                            >
                                                                <div
                                                                    class="icon"
                                                                >
                                                                    <img
                                                                        src="front/assets/images/favorites.png"
                                                                        class="img-fluid svg_image"
                                                                        alt="icon png"
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="txt_content"
                                                                >
                                                                    <h3>
                                                                        <a
                                                                            >Flexible
                                                                            Company
                                                                            Policies</a
                                                                        >
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!--===============spacing==============-->
                                                            <div
                                                                class="pd_bottom_25"
                                                            ></div>
                                                            <!--===============spacing==============-->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="theme_btn_all color_one mb-3"
                                                >
                                                    <a
                                                        :href="
                                                            route(
                                                                'front.contact'
                                                            )
                                                        "
                                                        class="theme-btn five"
                                                        >Contact us<i
                                                            class="icon-right-arrow"
                                                        ></i
                                                    ></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="image_boxes style_two">
                                                <img
                                                    src="front/assets/images/shape-1.png"
                                                    class="background_image"
                                                    alt="image"
                                                />
                                                <div class="image one">
                                                    <img
                                                        src="front/assets/images/img-about2.jpg"
                                                        class="img-fluid"
                                                        alt="image"
                                                    />
                                                </div>
                                                <div class="image two">
                                                    <img
                                                        src="front/assets/images/img-about-3.jpg"
                                                        class="img-fluid"
                                                        alt="image"
                                                    />
                                                </div>
                                                <div class="authour_quotes">
                                                    <i class="icon-quote"></i>
                                                    <h6>
                                                        Making What’s Possible
                                                        in Development
                                                    </h6>
                                                    <p>/ M. Aqib</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_20"></div>
                                <!--===============spacing==============-->
                            </section>
                            <!---about end--->
                            <!---service--->
                            <section class="service-icon-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 mt-2">
                                            <div
                                                class="title_all_box style_one text-center dark_color"
                                            >
                                                <div class="title_sections">
                                                    <div class="before_title">
                                                        Our Business
                                                    </div>
                                                    <h2 class="title">
                                                        Stand Out From The Rest
                                                    </h2>
                                                </div>
                                                <!--===============spacing==============-->
                                                <div class="pd_bottom_20"></div>
                                                <!--===============spacing==============-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12"
                                        >
                                            <div
                                                class="simple_image_boxes parallax_cover height_264px"
                                            >
                                                <img
                                                    src="front/assets/images/about1.jpeg"
                                                    class="simp_img cover-parallax"
                                                    alt="image"
                                                />
                                            </div>
                                            <!--===============spacing==============-->
                                            <div class="pd_bottom_20"></div>
                                            <!--===============spacing==============-->
                                            <div
                                                class="icon_box_all style_three"
                                            >
                                                <div class="icon_content">
                                                    <div class="icon">
                                                        <span
                                                            class="icon-bow-and-arrow"
                                                        ></span>
                                                    </div>
                                                    <div class="txt_content">
                                                        <h3>
                                                            <a>Our Mission</a>
                                                        </h3>
                                                        <p>
                                                            Our mission is to
                                                            provide innovative
                                                            and tailored
                                                            solutions to meet
                                                            the unique needs of
                                                            businesses across
                                                            various sectors.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-0 mt-xl-0"
                                        >
                                            <div
                                                class="icon_box_all style_three"
                                            >
                                                <div class="icon_content">
                                                    <div class="icon">
                                                        <span
                                                            class="icon-growth"
                                                        ></span>
                                                    </div>
                                                    <div class="txt_content">
                                                        <h3>
                                                            <a
                                                                >We Are
                                                                Creative</a
                                                            >
                                                        </h3>
                                                        <p>
                                                            Whole creativity
                                                            depends on focus and
                                                            determination.
                                                        </p>
                                                        <ul>
                                                            <li>
                                                                innovative
                                                                skills
                                                            </li>
                                                            <li>
                                                                Practice focus
                                                            </li>
                                                            <li>
                                                                Consumer focus
                                                            </li>
                                                            <li>
                                                                Creative mind
                                                            </li>
                                                            <li>
                                                                Structure the
                                                                time
                                                            </li>
                                                        </ul>
                                                        <div class="btn_left">
                                                            <a
                                                                class="theme-btn one"
                                                                >Read More</a
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-4 mt-xl-0"
                                        >
                                            <div
                                                class="icon_box_all style_three"
                                            >
                                                <div class="icon_content">
                                                    <div class="icon">
                                                        <span
                                                            class="icon-binoculars"
                                                        ></span>
                                                    </div>
                                                    <div class="txt_content">
                                                        <h3>
                                                            <a>Determination</a>
                                                        </h3>
                                                        <p>
                                                            It is your
                                                            determination and
                                                            Persistence that
                                                            will make you a
                                                            successful person.
                                                            We are
                                                            crazy,energetic,
                                                            quality Obsessed
                                                            developers,
                                                            designers and
                                                            determined to our
                                                            work
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--===============spacing==============-->
                                            <div class="pd_bottom_20"></div>
                                            <!--===============spacing==============-->
                                            <div
                                                class="simple_image_boxes height_125px"
                                            >
                                                <img
                                                    src="front/assets/images/about2.jpeg"
                                                    class="simp_img img-fluid"
                                                    alt="image"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!---service end--->

                            <!---team--->
                            <section class="team-section">
                                <!--team start-->
                                <TeamList :teams="teams" />
                                <!--team end-->
                            </section>
                            <!---team-end--->

                            <!---Clients and partners-start--->

                            <ClientsAndPartners />

                            <!---Clients and partners-end--->
                        </div>
                    </div>
                </div>
            </body>
        </main>
    </layout>
</template>
<script>
import Layout from "../Shared/Layout.vue";
import TeamList from "../Components/TeamList.vue";
import ClientsAndPartners from "../Components/ClientsAndPartners.vue";

export default {
    components: { Layout, TeamList, ClientsAndPartners },
    props: {
        about_page_content: Object,
        teams: Object,
    },
};
</script>
<style scoped>
.page_header_default::before {
    opacity: 0.5;
}
.page_header_default .parallax_cover img {
    max-width: 100%;
    height: 66% !important;
    width: 100% !important;
    -o-object-fit: cover;
    object-fit: cover;
    margin-bottom: 0px;
}
</style>
