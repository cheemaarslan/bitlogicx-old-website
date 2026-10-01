<template>
    <div class="page_header_default style_one">
        <div class="parallax_cover">
            <div class="simpleParallax">
                <img
                    :src="projectbannerimg"
                    alt="bg_image"
                    class="cover-parallax"
                />
            </div>
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                {{ singleproject.project_name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li>
                                    <a :href="route('front.index')">Home</a>
                                </li>
                                <li>
                                    <a :href="route('front.our_work')"
                                        >Our projects</a
                                    >
                                </li>
                                <li class="active">
                                    {{ singleproject.project_name }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----page-CONTENT----->
    <div id="content" class="site-content">
        <section class="project-detail-section">
            <!--===============spacing==============-->
            <div class="pd_top_40"></div>
            <!--===============spacing==============-->
            <div class="container-xl">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                        <div class="title_all_box style_one dark_color">
                            <div class="title_sections left">
                                <div class="before_title">
                                    {{ singleproject.subtitle }}
                                </div>
                                <h2>{{ singleproject.project_name }}</h2>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_10"></div>
                        <!--===============spacing==============-->
                        <div class="description_box">
                            <p>
                                {{ singleproject.sub_description }}
                            </p>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_10"></div>
                        <!--===============spacing==============-->
                        <div
                            class="description_box"
                            v-html="singleproject.description"
                        ></div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_25"></div>
                        <!--===============spacing==============-->
                        <div class="row gutter_30px">
                            <div
                                class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4 mb-lg-0 mb-xl-0"
                            >
                                <div class="simple_image_boxes">
                                    <img
                                        :src="singleproject.project_image"
                                        class="simp_img cover-parallax"
                                        alt="image"
                                    />
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_25"></div>
                                <!--===============spacing==============-->
                            </div>
                        </div>

                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="project_information shadow-lg p-3 mb-5 bg-white rounded">
                            <h2>Project Info</h2>
                            <div class="project_information_bo">
                                <div class="repeat_informtion">
                                    <h6>Date:</h6>
                                    <p>{{ singleproject.date }}</p>
                                </div>
                                <div class="repeat_informtion">
                                    <h6>Website:</h6>
                                    <a
                                        :href="singleproject.project_link"
                                        target="_blank"
                                        class="read_more"
                                        >{{ singleproject.project_link }}</a
                                    >
                                </div>
                                <div class="social_medias">
                                    <a
                                        :href="
                                            $page.props.content['facebook']
                                                .value
                                        "
                                    >
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    <a
                                        :href="
                                            $page.props.content['twitter'].value
                                        "
                                    >
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    <a
                                        :href="
                                            $page.props.content['linkedin']
                                                .value
                                        "
                                    >
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                    <a
                                        :href="
                                            $page.props.content['instagram']
                                                .value
                                        "
                                    >
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_70"></div>
            <!--===============spacing==============-->
        </section>
    </div>
</template>

<script>
export default {
    props: {
        singleproject: Object,
    },
    data() {
        return {
            projectbannerimg: "/front/assets/images/projects-bg.jpg",
        };
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
