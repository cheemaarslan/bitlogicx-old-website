<template>
    <Layout>
        <!-- Page header -->
        <div class="page_header_default style_one">
            <div class="parallax_cover">
                <img
                    src="front\assets\images\career-bg.jpg"
                    alt="bg_image"
                    class="cover-parallax"
                />
            </div>
            <div class="page_header_content">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner_title_inner">
                                <div class="title_page">Career</div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="breadcrumbs creote">
                                <ul class="breadcrumb m-auto">
                                    <li>
                                        <a :href="route('front.index')">Home</a>
                                    </li>
                                    <li class="active">Career</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_30"></div>
        <!--===============spacing==============-->
        <!-- Career section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_seven text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">
                            <span class="icon-briefcase icon"></span>
                            Career
                        </div>
                        <div class="title">Join Our Team</div>
                        
                        <p class="description_text">
                            Be part of a dynamic and innovative team <br />
                            where your skills and contributions are valued, and
                            together, we'll make a difference.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_10"></div>
        <!--===============spacing==============-->
        <!-- Conditional rendering based on careers -->
        <div class="row">
            <div class="col-lg-12">
                <div v-if="careers && careers.length > 0">
                    <CareerList :careers="careers" />
                </div>
                <div v-else>
                    <div class="row">
                        <div class="col-lg-12">
                            <div
                                class="title_all_box style_seven text-center dark_color"
                            >
                                <div class="title_sections">
                                    <div class="title">
                                        No Job Openings Right Now...
                                    </div>
                                    <p class="description_text">
                                        You can wait for the job openings.
                                        <br />
                                        Or contact us when we will open for Job.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import CareerList from "../Components/CareerList.vue";
import Layout from "../Shared/Layout.vue";

export default {
    components: {
        Layout,
        CareerList,
    },
    props: {
        careers: Array,
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