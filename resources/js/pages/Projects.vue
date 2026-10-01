<template>
    <Layout>
        <main id="main">
            <!----page header----->
            <div class="page_header_default style_one">
                <div class="parallax_cover">
                    <img
                        src="front\assets\images\projects-bg.jpg"
                        alt="bg_image"
                        class="cover-parallax"
                    />
                </div>
                <div class="page_header_content">
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner_title_inner">
                                    <div class="title_page">Our Projects</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="breadcrumbs creote">
                                    <ul class="breadcrumb m-auto">
                                        <li>
                                            <a :href="route('front.index')"
                                                >Home</a
                                            >
                                        </li>
                                        <li class="active">Our Projects</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_30"></div>
            <!--===============spacing==============-->
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="title_all_box style_seven text-center dark_color"
                    >
                        <div class="title_sections">
                            <div class="before_title">
                                <span class="icon-briefcase icon"></span>
                                Our Projects
                            </div>
                            <div class="title">A Glance of Our Work</div>

                            <p class="description_text">
                                We are a dedicated team of professionals
                                delivering exceptional<br />
                                services and innovative solutions to drive
                                business success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!----page header----->
            <ProjectList :projects="projects" />
        </main>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";
import ProjectList from "../Components/ProjectList.vue";
export default {
    components: {
        Layout,
        ProjectList,
    },
    props: {
        projects: Object,
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
